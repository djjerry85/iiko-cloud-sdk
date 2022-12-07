<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\TipsPayment;

class TipsPaymentExternal extends TipsPayment
{
    /**
     * Enum: Cash, Card, External.
     */
    protected string $paymentTypeKind = 'External';
}
