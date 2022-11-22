<?php

namespace UsePack\IikoCloud;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use UsePack\IikoCloud\Entity\Requests\BaseRequest;
use UsePack\IikoCloud\Entity\Requests\MenuRequest;
use UsePack\IikoCloud\Entity\Requests\OrganizationsRequest;
use UsePack\IikoCloud\Entity\Responses\Menu;
use UsePack\IikoCloud\Entity\Responses\Organization;
use UsePack\IikoCloud\Exceptions\IIkoAuthException;
use UsePack\IikoCloud\Exceptions\IIkoRequestException;
use UsePack\IikoCloud\Exceptions\UnsupportedHttpRequestType;

final class Client
{
    private string $login;

    private ?string $token;

    private int $expire = 0;

    private \GuzzleHttp\Client $http;

    public function __construct(string $login, float $timeout = 15.0)
    {
        $this->login = $login;

        $this->http = new \GuzzleHttp\Client([
            'base_uri' => Constants::API_URL,
            RequestOptions::TIMEOUT => $timeout,
            RequestOptions::HTTP_ERRORS => false,
            RequestOptions::HEADERS => [
                'Timeout' => $timeout,
            ],
        ]);
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    private function apiRequest(string $type, string $method, BaseRequest|array|null $source = null): array
    {
        $token = $this->getToken();

        if (empty($token)) {
            $this->authorize();
        }

        $token = $this->getToken();

        $headers = [
            'Authorization' => "Bearer $token",
        ];

        if (is_object($source)) {
            $params = $source->prepareRequest();
        } elseif (is_array($source)) {
            $params = $source;
        } else {
            $params = [];
        }

        try {
            $response = match ($type) {
                'GET' => $this->http->get($method, ['query' => $params, 'headers' => $headers]),
                'DELETE' => $this->http->delete($method, ['headers' => $headers]),
                'POST' => $this->http->post($method, ['json' => $params, 'headers' => $headers]),
                'PATCH' => $this->http->patch($method, ['json' => $params, 'headers' => $headers]),
                default => throw new UnsupportedHttpRequestType(),
            };
        } catch (GuzzleException|UnsupportedHttpRequestType) {
            throw new IIkoRequestException(Constants::UNKNOWN_ERROR_OCCURRED);
        }

        $json = $response->getBody()->getContents();
        $apiResponse = json_decode($json, true);

        $this->checkErrors(response: $response, apiResponse: $apiResponse);

        return $apiResponse;
    }

    /**
     * @throws IIkoAuthException
     */
    private function authorize(): void
    {
        $param = [
            Constants::API_LOGIN => $this->login,
        ];

        try {
            $response = $this->http->post(
                Constants::ACCESS_TOKEN_URL,
                [
                    RequestOptions::JSON => $param,
                ]
            );
        } catch (GuzzleException) {
            throw new IIkoAuthException();
        }

        if ($response->getStatusCode() === 200) {
            $body = json_decode($response->getBody());
            $this->token = $body->token ?? null;
            $this->expire = time() + 180;

            return;
        }

        $message = $this->getErrorMessage($response);
        throw new IIkoAuthException($message ?? '');
    }

    private function getErrorMessage(\Psr\Http\Message\ResponseInterface $response): ?string
    {
        $info = json_decode($response->getBody(), true);

        return $info[Constants::ERROR_DESCRIPTION] ?? null;
    }

    private function getToken(): ?string
    {
        if ($this->expire > time() && !empty($this->token)) {
            return $this->token;
        }

        return null;
    }

    /**
     * @throws IIkoRequestException
     */
    private function checkErrors($response, $apiResponse): void
    {
        if ($response->getStatusCode() >= 400) {
            $message = $apiResponse[Constants::ERROR_DESCRIPTION] ?? Constants::UNKNOWN_ERROR_OCCURRED;
            $status = $response->getStatusCode();

            throw new IIkoRequestException($message, $status);
        }
    }

    /**
     * @return Organization[]
     *
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function getOrganizations(?OrganizationsRequest $filter): array
    {
        $filter ??= new OrganizationsRequest();

        $organizations = [];
        $response = $this->apiRequest('POST', Constants::ORGANIZATIONS_URL, $filter);

        foreach ($response['organizations'] as $value) {
            $organizations[] = new Organization($value);
        }

        return $organizations;
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function getMenu(MenuRequest $filter): Menu
    {
        $response = $this->apiRequest('POST', Constants::NOMENCLATURE_URL, $filter);

        return new Menu($response);
    }
}
