<?php

namespace UsePack\IikoCloud\Entity\Responses\OrderType;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class OrderTypeGroup extends BaseResponse
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
     * @var OrderType[]
     */
    protected array $items;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->items = OrderType::collection($this->items);
    }
}
