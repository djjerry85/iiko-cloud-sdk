<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class WalletInfo extends BaseResponse
{
    /**
     * Wallet id.
     */
    protected string $id;

    /**
     * Max sum for payment from the wallet.
     */
    protected float $maxSum;

    /**
     * Can hold money.
     */
    protected bool $canHoldMoney;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getMaxSum(): float
    {
        return $this->maxSum;
    }

    public function setMaxSum(float $maxSum): void
    {
        $this->maxSum = $maxSum;
    }

    public function isCanHoldMoney(): bool
    {
        return $this->canHoldMoney;
    }

    public function setCanHoldMoney(bool $canHoldMoney): void
    {
        $this->canHoldMoney = $canHoldMoney;
    }
}
