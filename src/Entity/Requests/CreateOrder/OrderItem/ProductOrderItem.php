<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class ProductOrderItem extends BaseRequest
{
    /**
     * Enum: Product, Compound.
     */
    protected string $type = 'Product';

    /**
     * ID of menu item.
     *
     * - Can be obtained by /api/1/nomenclature operation.
     */
    protected string $productId;

    /**
     * Modifiers.
     *
     * @var Modifier[]|null
     */
    protected ?array $modifiers;

    /**
     * Price per item unit. Can be sent different from the price in the base menu.
     */
    protected ?float $price;

    /**
     * Unique identifier of the item in the order. MUST be unique for the whole system. Therefore it must be generated with Guid.NewGuid().
     *
     * - If sent null, it generates automatically on iikoTransport side.
     */
    protected ?float $positionId;

    /**
     * Quantity.
     *
     * [ 0 .. 999.999 ]
     */
    protected float $amount;

    /**
     * Size ID. Required if a stock list item has a size scale.
     */
    protected ?string $productSizeId;

    /**
     * Size ID. Required if a stock list item has a size scale.
     */
    protected ?ComboInformation $comboInformation;

    /**
     * Comment.
     *
     * - [ 0 .. 255 ] characters
     */
    protected ?string $comment;

    public function __construct(string $productId, float $amount)
    {
        $this->productId = $productId;
        $this->amount = $amount;
    }

    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    public function setModifiers(?array $modifiers): void
    {
        $this->modifiers = $modifiers;
    }

    public function addModifier(Modifier $modifier): void
    {
        if (!is_array($this->modifiers)) {
            $this->modifiers = [];
        }

        $this->modifiers[] = $modifier;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function setPositionId(?float $positionId): void
    {
        $this->positionId = $positionId;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function setProductSizeId(?string $productSizeId): void
    {
        $this->productSizeId = $productSizeId;
    }

    public function setComboInformation(?ComboInformation $comboInformation): void
    {
        $this->comboInformation = $comboInformation;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
}
