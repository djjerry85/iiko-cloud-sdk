<?php

namespace UsePack\IikoCloud\Entity\Requests\StreetsByCity;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class Request extends BaseRequest
{
    /**
     * Organization ID details of which have to be returned.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected string $organizationId;

    /**
     * City ID.
     */
    protected string $cityId;

    public function __construct(string $organizationId, string $cityId)
    {
        $this->organizationId = $organizationId;
        $this->cityId = $cityId;
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(string $organizationId): void
    {
        $this->organizationId = $organizationId;
    }

    public function getCityId(): string
    {
        return $this->cityId;
    }

    public function setCityId(string $cityId): void
    {
        $this->cityId = $cityId;
    }
}
