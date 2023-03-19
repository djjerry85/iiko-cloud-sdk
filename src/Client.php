<?php

namespace UsePack\IikoCloud;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use UsePack\IikoCloud\Entity\Requests\BaseRequest;
use UsePack\IikoCloud\Entity\Requests\MenuRequest;
use UsePack\IikoCloud\Entity\Requests\OrganizationsRequest;
use UsePack\IikoCloud\Entity\Responses\Discount\OrganizationDiscounts;
use UsePack\IikoCloud\Entity\Responses\Menu;
use UsePack\IikoCloud\Entity\Responses\OrderType\OrderTypeGroup;
use UsePack\IikoCloud\Entity\Responses\Organization;
use UsePack\IikoCloud\Entity\Responses\PaymentType;
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

    /**
     * @return PaymentType[]
     *
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function getPaymentTypes(Entity\Requests\PaymentTypesRequest $request): array
    {
        $response = $this->apiRequest('POST', Constants::PAYMENT_TYPES_URL, $request);

        return array_map(fn ($item) => new PaymentType($item), $response['paymentTypes']);
    }

    /**
     * @return OrderTypeGroup[]
     *
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function getOrderTypes(Entity\Requests\OrderTypesRequest $request): array
    {
        $response = $this->apiRequest('POST', Constants::ORDER_TYPES, $request);

        return array_map(fn ($item) => new OrderTypeGroup($item), $response['orderTypes']);
    }

    /**
     * @return OrganizationDiscounts[]
     *
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function getDiscounts(Entity\Requests\DiscountsRequest $request): array
    {
        $response = $this->apiRequest('POST', Constants::DISCOUNTS_URL, $request);

        return array_map(fn ($item) => new OrganizationDiscounts($item), $response['discounts']);
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function createDelivery(Entity\Requests\CreateDelivery\Request $request): Entity\Responses\CreateDelivery\Response
    {
        $response = $this->apiRequest('POST', Constants::CREATE_DELIVERY_URL, $request);

        return new Entity\Responses\CreateDelivery\Response($response);
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function retrieveDeliveriesByIds(Entity\Requests\RetrieveDeliveriesByIds $request): Entity\Responses\Deliveries\RetrieveByIds\Response
    {
        $response = $this->apiRequest('POST', Constants::RETRIEVE_DELIVERIES_BY_IDS, $request);

        return new Entity\Responses\Deliveries\RetrieveByIds\Response($response);
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function createOrder(Entity\Requests\CreateOrder\Request $request): Entity\Responses\CreateOrder\Response
    {
        $response = $this->apiRequest('POST', Constants::CREATE_ORDER_URL, $request);

        return new Entity\Responses\CreateOrder\Response($response);
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function getDeliveryRestrictions(Entity\Requests\DeliveryRestrictions\Request $request): Entity\Responses\DeliveryRestrictions\Response
    {
        $response = $this->apiRequest('POST', Constants::DELIVERY_RESTRICTIONS_URL, $request);

        return new Entity\Responses\DeliveryRestrictions\Response($response);
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function getAllowedDeliveryRestrictions(Entity\Requests\DeliveryRestrictions\AllowedRestrictions\Request $request): Entity\Responses\DeliveryRestrictions\AllowedRestrictions\Response
    {
        $response = $this->apiRequest('POST', Constants::DELIVERY_RESTRICTIONS_ALLOWED_URL, $request);

        return new Entity\Responses\DeliveryRestrictions\AllowedRestrictions\Response($response);
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function getStreetsByCity(Entity\Requests\StreetsByCity\Request $request): Entity\Responses\StreetsByCity\Response
    {
        $response = $this->apiRequest('POST', Constants::STREETS_BY_CITY, $request);

        return new Entity\Responses\StreetsByCity\Response($response);
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function getStopLists(Entity\Requests\StopLists\Request $request): Entity\Responses\StopLists\Response
    {
        $response = $this->apiRequest('POST', Constants::STOP_LISTS, $request);

        return new Entity\Responses\StopLists\Response($response);
    }

    /**
     * @throws IIkoAuthException
     * @throws IIkoRequestException
     */
    public function webhookUpdateSettings(Entity\Requests\Webhook\UpdateSettings\Request $request): Entity\Responses\Webhook\UpdateSettings\Response
    {
        $response = $this->apiRequest('POST', Constants::WEBHOOK_UPDATE_SETTINGS, $request);

        return new Entity\Responses\Webhook\UpdateSettings\Response($response);
    }
}
