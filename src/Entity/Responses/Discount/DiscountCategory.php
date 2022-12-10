<?php

namespace UsePack\IikoCloud\Entity\Responses\Discount;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class DiscountCategory extends BaseResponse
{
    /**
     * Category ID.
     */
    protected string $categoryId;

    /**
     * Category name.
     */
    protected string $categoryName;

    /**
     * This category discount %.
     */
    protected float $percent;

    public function getCategoryId(): string
    {
        return $this->categoryId;
    }

    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    public function getPercent(): float
    {
        return $this->percent;
    }
}
