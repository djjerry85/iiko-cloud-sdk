<?php

namespace UsePack\IikoCloud\Entity\Requests\DeliveryRestrictions\AllowedRestrictions;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class OrderItem extends BaseRequest
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

    /**
     * Modifiers (absolute amount).
     *
     * @var OrderItemModifier[]
     */
    protected array $modifiers;

    /**
     * @param OrderItemModifier[] $modifiers
     */
    public function __construct(string $id, string $product, float $amount, array $modifiers)
    {
        $this->id = $id;
        $this->product = $product;
        $this->amount = $amount;
        $this->modifiers = $modifiers;
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

    public function getModifiers(): array
    {
        return $this->modifiers;
    }

    public function setModifiers(array $modifiers): void
    {
        $this->modifiers = $modifiers;
    }
}
