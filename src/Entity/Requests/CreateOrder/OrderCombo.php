<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class OrderCombo extends BaseRequest
{
    /**
     * Combo ID.
     */
    protected string $id;

    /**
     * Name of combo.
     */
    protected string $name;

    /**
     * Quantity.
     */
    protected int $amount;

    /**
     * Price of one combo.
     */
    protected float $price;

    /**
     * Combo validity ID.
     */
    protected string $sourceId;

    /**
     * Card program ID.
     */
    protected string $programId;

    public function __construct(string $id, string $name, int $amount, float $price, string $sourceId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
        $this->sourceId = $sourceId;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setSourceId(string $sourceId): void
    {
        $this->sourceId = $sourceId;
    }

    public function setProgramId(string $programId): void
    {
        $this->programId = $programId;
    }
}
