<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\TipsPayment;

class TipsPaymentCash extends TipsPayment
{
    /**
     * Enum: Cash, Card, External.
     */
    protected string $paymentTypeKind = 'Cash';
}
