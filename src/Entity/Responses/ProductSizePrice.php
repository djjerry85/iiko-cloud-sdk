<?php

namespace UsePack\IikoCloud\Entity\Responses;

class ProductSizePrice extends BaseResponse
{
    /**
     * Item size ID.
     */
    protected ?string $sizeId;

    /**
     * Price per this item size.
     */
    protected ProductSizePriceValue $price;

    /** @noinspection PhpMissingParentConstructorInspection */
    public function __construct(?array $properties = null)
    {
        $this->sizeId = $properties['sizeId'] ?? null;
        $this->price = ProductSizePriceValue::create($properties['price']);
    }

    public function getSizeId(): ?string
    {
        return $this->sizeId;
    }

    public function getPrice(): ProductSizePriceValue
    {
        return $this->price;
    }
}
