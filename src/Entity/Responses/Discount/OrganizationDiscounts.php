<?php

namespace UsePack\IikoCloud\Entity\Responses\Discount;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class OrganizationDiscounts extends BaseResponse
{
    /**
     * Organization ID.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected string $organizationId;

    /**
     * Items for organization.
     *
     * @var Discount[]
     */
    protected array $items;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->items = Discount::collection($this->items);
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    /**
     * @return Discount[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
