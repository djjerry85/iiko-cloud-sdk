<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    /**
     * Operation ID.
     */
    protected string $correlationId;

    /**
     * Delivery restrictions.
     *
     * @var DeliveryRestrictions[]
     */
    protected array $deliveryRestrictions = [];

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->deliveryRestrictions = DeliveryRestrictions::collection($this->deliveryRestrictions);
    }

    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }

    public function setCorrelationId(string $correlationId): void
    {
        $this->correlationId = $correlationId;
    }

    /**
     * @return DeliveryRestrictions[]
     */
    public function getDeliveryRestrictions(): array
    {
        return $this->deliveryRestrictions;
    }

    /**
     * @param DeliveryRestrictions[] $deliveryRestrictions
     */
    public function setDeliveryRestrictions(array $deliveryRestrictions): void
    {
        $this->deliveryRestrictions = $deliveryRestrictions;
    }
}
