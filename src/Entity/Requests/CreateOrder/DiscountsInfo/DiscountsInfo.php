<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\DiscountsInfo;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class DiscountsInfo extends BaseRequest
{
    /**
     * Track of discount card to be applied to order.
     */
    protected ?DiscountCard $card;

    /**
     * Discounts/surcharges.
     *
     * @var (DiscountIikoCard|DiscountRMS)[]
     */
    protected ?array $discounts;

    /**
     * Track of discount card to be applied to order.
     */
    public function setCard(?DiscountCard $card): void
    {
        $this->card = $card;
    }

    /**
     * Discounts/surcharges.
     *
     * @param (DiscountIikoCard|DiscountRMS)[] $discounts
     */
    public function setDiscounts(?array $discounts): void
    {
        $this->discounts = $discounts;
    }
}
