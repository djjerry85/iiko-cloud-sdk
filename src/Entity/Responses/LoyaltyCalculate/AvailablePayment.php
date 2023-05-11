<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class AvailablePayment extends BaseResponse
{
    /**
     * Marketing campaign id.
     */
    protected string $id;

    /**
     * Max sum.
     */
    protected float $maxSum;

    /**
     * Payment order. In case of partial payment, payments with lesser order should be filled first.
     */
    protected int $order;

    /**
     * Wallet infos.
     *
     * @var WalletInfo[]
     */
    protected array $walletInfos;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->walletInfos = WalletInfo::collection($this->walletInfos);
    }

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

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): void
    {
        $this->order = $order;
    }

    /**
     * @return WalletInfo[]
     */
    public function getWalletInfos(): array
    {
        return $this->walletInfos;
    }

    /**
     * @param WalletInfo[] $walletInfos
     */
    public function setWalletInfos(array $walletInfos): void
    {
        $this->walletInfos = $walletInfos;
    }
}
