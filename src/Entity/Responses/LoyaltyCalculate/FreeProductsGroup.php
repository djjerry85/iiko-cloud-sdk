<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class FreeProductsGroup extends BaseResponse
{
    /**
     * Id of action that caused the suggestion.
     */
    protected string $sourceActionId;

    /**
     * Description for user. Can be null.
     */
    protected ?string $descriptionForUser = null;

    /**
     * Codes of products that suggested to be added to order.
     *
     * @var FreeProduct[]
     */
    protected array $products;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->products = FreeProduct::collection($this->products);
    }

    public function getSourceActionId(): string
    {
        return $this->sourceActionId;
    }

    public function setSourceActionId(string $sourceActionId): void
    {
        $this->sourceActionId = $sourceActionId;
    }

    public function getDescriptionForUser(): ?string
    {
        return $this->descriptionForUser;
    }

    public function setDescriptionForUser(?string $descriptionForUser): void
    {
        $this->descriptionForUser = $descriptionForUser;
    }

    /**
     * @return FreeProduct[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param FreeProduct[] $products
     */
    public function setProducts(array $products): void
    {
        $this->products = $products;
    }
}
