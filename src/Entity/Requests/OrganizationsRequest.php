<?php

namespace UsePack\IikoCloud\Entity\Requests;

class OrganizationsRequest extends BaseRequest
{
    protected bool $returnAdditionalInfo = true;

    protected ?bool $includeDisabled = null;

    protected ?array $organizationIds = null;

    public function setIncludeDisabled(?bool $includeDisabled): void
    {
        $this->includeDisabled = $includeDisabled;
    }

    public function setOrganizationIds(?array $organizationIds): void
    {
        $this->organizationIds = $organizationIds;
    }
}
