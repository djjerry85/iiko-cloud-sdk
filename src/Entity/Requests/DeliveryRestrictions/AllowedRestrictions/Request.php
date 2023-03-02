<?php

namespace UsePack\IikoCloud\Entity\Requests\DeliveryRestrictions\AllowedRestrictions;

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

    /**
     * Delivery address.
     */
    protected ?DeliveryAddress $deliveryAddress = null;

    /**
     * Order location.
     */
    protected ?Location $orderLocation = null;

    /**
     * Order list.
     *
     * @var OrderItem[]
     */
    protected array $orderItems;

    /**
     * Type of delivery service.
     */
    protected bool $isCourierDelivery;

    /**
     * Delivery date (Local for delivery terminal).
     */
    protected ?string $deliveryDate = null;

    /**
     * Sum.
     */
    protected ?float $deliverySum = null;

    /**
     * Discounts sum.
     */
    protected ?float $discountSum = null;

    /**
     * @param string[]    $organizationIds
     * @param OrderItem[] $orderItems
     */
    public function __construct(array $organizationIds, array $orderItems, bool $isCourierDelivery)
    {
        $this->organizationIds = $organizationIds;
        $this->orderItems = $orderItems;
        $this->isCourierDelivery = $isCourierDelivery;
    }

    public function getOrganizationIds(): array
    {
        return $this->organizationIds;
    }

    public function setOrganizationIds(array $organizationIds): void
    {
        $this->organizationIds = $organizationIds;
    }

    public function getDeliveryAddress(): ?DeliveryAddress
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?DeliveryAddress $deliveryAddress): void
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    public function getOrderLocation(): ?Location
    {
        return $this->orderLocation;
    }

    public function setOrderLocation(?Location $orderLocation): void
    {
        $this->orderLocation = $orderLocation;
    }

    /**
     * @return OrderItem[]
     */
    public function getOrderItems(): array
    {
        return $this->orderItems;
    }

    /**
     * @param OrderItem[] $orderItems
     */
    public function setOrderItems(array $orderItems): void
    {
        $this->orderItems = $orderItems;
    }

    public function isCourierDelivery(): bool
    {
        return $this->isCourierDelivery;
    }

    public function setIsCourierDelivery(bool $isCourierDelivery): void
    {
        $this->isCourierDelivery = $isCourierDelivery;
    }

    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    public function getDeliverySum(): ?float
    {
        return $this->deliverySum;
    }

    public function setDeliverySum(?float $deliverySum): void
    {
        $this->deliverySum = $deliverySum;
    }

    public function getDiscountSum(): ?float
    {
        return $this->discountSum;
    }

    public function setDiscountSum(?float $discountSum): void
    {
        $this->discountSum = $discountSum;
    }
}
