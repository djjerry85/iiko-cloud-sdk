<?php

namespace UsePack\IikoCloud\Entity\Requests\DeliveryRestrictions\AllowedRestrictions;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class OrderItemModifier extends BaseRequest
{
    /**
     * Product ID.
     */
    protected string $id;

    /**
     * Product.
     */
    protected string $product;

    /**
     * Amount.
     */
    protected float $amount;

    public function __construct(string $id, string $product, float $amount)
    {
        $this->id = $id;
        $this->product = $product;
        $this->amount = $amount;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getProduct(): string
    {
        return $this->product;
    }

    public function setProduct(string $product): void
    {
        $this->product = $product;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }
}
