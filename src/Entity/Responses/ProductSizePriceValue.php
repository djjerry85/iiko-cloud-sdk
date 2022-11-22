<?php

namespace UsePack\IikoCloud\Entity\Responses;

class ProductSizePriceValue extends BaseResponse
{
    /**
     * Current price.
     */
    protected float $currentPrice;

    /**
     * Is on the menu.
     */
    protected bool $isIncludedInMenu;

    /**
     * New price.
     */
    protected ?float $nextPrice;

    /**
     * Will be on the menu in the future.
     */
    protected bool $nextIncludedInMenu;

    /**
     * New price validity start date (Local for the terminal).
     */
    protected ?string $nextDatePrice;

    public function getCurrentPrice(): float
    {
        return $this->currentPrice;
    }

    public function isIncludedInMenu(): bool
    {
        return $this->isIncludedInMenu;
    }

    public function getNextPrice(): ?float
    {
        return $this->nextPrice;
    }

    public function isNextIncludedInMenu(): bool
    {
        return $this->nextIncludedInMenu;
    }

    public function getNextDatePrice(): ?string
    {
        return $this->nextDatePrice;
    }
}
