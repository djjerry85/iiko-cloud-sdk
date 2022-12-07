<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\TipsPayment;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;
use UsePack\IikoCloud\Entity\Requests\CreateOrder\Payment\PaymentAdditionalData;

class TipsPayment extends BaseRequest
{
    /**
     * Enum: Cash, Card, External.
     */
    protected string $paymentTypeKind;

    /**
     * Tips type ID.
     *
     * - Can be obtained by /api/1/tips_types operation.
     */
    protected string $tipsTypeId;

    /**
     * Amount due.
     *
     * - [ 0 .. 10000000000 ]
     */
    protected float $sum;

    /**
     * Payment type.
     *
     * - Can be obtained by /api/1/payment_types operation.
     */
    protected string $paymentTypeId;

    /**
     * Whether payment item is processed by external payment system (made from outside).
     */
    protected ?bool $isProcessedExternally;

    /**
     * Additional payment parameters.
     */
    protected ?PaymentAdditionalData $paymentAdditionalData;

    /**
     * Whether the payment item is externally fiscalized.
     */
    protected ?bool $isFiscalizedExternally;

    public function __construct(string $tipsTypeId, float $sum, string $paymentTypeId)
    {
        $this->tipsTypeId = $tipsTypeId;
        $this->sum = $sum;
        $this->paymentTypeId = $paymentTypeId;
    }

    public function setTipsTypeId(string $tipsTypeId): void
    {
        $this->tipsTypeId = $tipsTypeId;
    }

    public function setSum(float $sum): void
    {
        $this->sum = $sum;
    }

    public function setPaymentTypeId(string $paymentTypeId): void
    {
        $this->paymentTypeId = $paymentTypeId;
    }

    public function setIsProcessedExternally(?bool $isProcessedExternally): void
    {
        $this->isProcessedExternally = $isProcessedExternally;
    }

    public function setPaymentAdditionalData(?PaymentAdditionalData $paymentAdditionalData): void
    {
        $this->paymentAdditionalData = $paymentAdditionalData;
    }

    public function setIsFiscalizedExternally(?bool $isFiscalizedExternally): void
    {
        $this->isFiscalizedExternally = $isFiscalizedExternally;
    }
}
