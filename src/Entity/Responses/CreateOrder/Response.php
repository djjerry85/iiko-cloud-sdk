<?php

namespace UsePack\IikoCloud\Entity\Responses\CreateOrder;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    /**
     * Operation ID.
     */
    protected string $correlationId;

    /**
     * Order.
     */
    protected OrderInfo $orderInfo;

    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }

    public function getOrderInfo(): OrderInfo
    {
        return $this->orderInfo;
    }
}
