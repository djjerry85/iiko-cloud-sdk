<?php

namespace UsePack\IikoCloud\Entity\Responses\Deliveries\RetrieveByIds;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    /**
     * Operation ID.
     */
    protected string $correlationId;

    /**
     * Orders.
     *
     * @var OrderInfo[]
     */
    protected array $orders;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->orders = OrderInfo::collection($this->orders);
    }

    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }

    /**
     * @return OrderInfo[]
     */
    public function getOrders(): array
    {
        return $this->orders;
    }
}
