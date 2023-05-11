<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class DiscountOperation extends BaseResponse
{
    public const FIXED_FOR_ENTIRE_ORDER = 0;
    public const FIXED_FOR_THE_ITEM = 1;
    public const FREE_PRODUCT = 2;
    public const OTHER_TYPE_OF_DISCOUNTS = 3;

    /**
     * Enum: 0 1 2 3
     * Operation Type Code.
     * 0 - fixed discount for the entire order,
     * 1 - fixed discount for the item,
     * 2 - free product,
     * 3 - other type of discounts.
     */
    protected int $code;

    /**
     * Deprecated, use positionId.
     */
    protected ?string $orderItemId = null;

    /**
     * Id of item the discount is applied to. If null - discount applied to whole orders.
     */
    protected ?string $positionId = null;

    /**
     * Discount sum.
     */
    protected float $discountSum;

    /**
     * Amount.
     */
    protected float $amount;

    /**
     * Comment. Can be null.
     */
    protected ?string $comment;

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    public function getOrderItemId(): ?string
    {
        return $this->orderItemId;
    }

    public function setOrderItemId(?string $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    public function getPositionId(): ?string
    {
        return $this->positionId;
    }

    public function setPositionId(?string $positionId): void
    {
        $this->positionId = $positionId;
    }

    public function getDiscountSum(): float
    {
        return $this->discountSum;
    }

    public function setDiscountSum(float $discountSum): void
    {
        $this->discountSum = $discountSum;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
}
