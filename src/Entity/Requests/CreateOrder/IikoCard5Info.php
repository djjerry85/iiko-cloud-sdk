<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class IikoCard5Info extends BaseRequest
{
    /**
     * Coupon No. that has to be considered when calculating loyalty program.
     */
    protected ?string $coupon;

    /**
     * Information about applied manual conditions.
     *
     * @var string[]|null
     */
    protected ?array $applicableManualConditions;

    public function setCoupon(?string $coupon): void
    {
        $this->coupon = $coupon;
    }

    /**
     * @param string[]|null $applicableManualConditions
     */
    public function setApplicableManualConditions(?array $applicableManualConditions): void
    {
        $this->applicableManualConditions = $applicableManualConditions;
    }
}
