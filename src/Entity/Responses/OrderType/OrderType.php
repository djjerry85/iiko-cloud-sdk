<?php

namespace UsePack\IikoCloud\Entity\Responses\OrderType;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class OrderType extends BaseResponse
{
    public const ORDER_SERVICE_TYPE_DELIVERY_BY_COURIER = 'DeliveryByCourier';
    public const ORDER_SERVICE_TYPE_DELIVERY_BY_PICKUP = 'DeliveryPickUp';

    /**
     * Order type ID in RMS.
     */
    protected string $id;

    /**
     * Order type name.
     */
    protected string $name;

    /**
     * Service type.
     *
     * Enum: "Common" "DeliveryByCourier" "DeliveryPickUp"
     */
    protected string $orderServiceType;

    /**
     * IsDeleted attribute of order type.
     */
    protected bool $isDeleted;

    /**
     * External system revision number.
     */
    protected ?int $externalRevision;
}
