<?php

namespace UsePack\IikoCloud\Entity\Responses\StopLists;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class StopListItem extends BaseResponse
{
    /**
     * Product balance.
     */
    protected float $balance;

    /**
     * Out-of-stock list product ID.
     */
    protected string $productId;

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }
}
