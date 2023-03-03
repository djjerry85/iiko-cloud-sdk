<?php

namespace UsePack\IikoCloud\Entity\Requests\DeliveryRestrictions;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class Request extends BaseRequest
{
    /**
     * Organization IDs.
     *
     * - Can be obtained by /api/1/organizations operation.
     *
     * @var string[]
     */
    protected array $organizationIds = [];

    public function __construct(array $organizationIds)
    {
        $this->organizationIds = $organizationIds;
    }

    public function getOrganizationIds(): array
    {
        return $this->organizationIds;
    }

    public function setOrganizationIds(array $organizationIds): void
    {
        $this->organizationIds = $organizationIds;
    }
}
