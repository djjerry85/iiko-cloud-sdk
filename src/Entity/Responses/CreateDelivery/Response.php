<?php

namespace UsePack\IikoCloud\Entity\Responses\CreateDelivery;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    /**
     * Operation ID.
     */
    protected string $correlationId;

    /**
     * Delivery order.
     */
    protected OrderInfo $orderInfo;

    /** @noinspection PhpMissingParentConstructorInspection */
    public function __construct(?array $properties = null)
    {
        $this->correlationId = $properties['correlationId'];
        $this->orderInfo = OrderInfo::create($properties['orderInfo']);
    }

    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }

    public function getOrderInfo(): OrderInfo
    {
        return $this->orderInfo;
    }
}
