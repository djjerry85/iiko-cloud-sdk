<?php

namespace UsePack\IikoCloud\Entity\Requests;

class PaymentTypesRequest extends BaseRequest
{
    /**
     * @var string[]
     */
    protected array $organizationIds = [];

    /**
     * @param string[] $organizationIds
     */
    public function __construct(array $organizationIds = [])
    {
        $this->organizationIds = $organizationIds;
    }

    /**
     * @param string[] $organizationIds
     */
    public function setOrganizationIds(array $organizationIds): void
    {
        $this->organizationIds = $organizationIds;
    }

    public function addOrganizationId(string $organizationId): void
    {
        $this->organizationIds[] = $organizationId;
    }
}
