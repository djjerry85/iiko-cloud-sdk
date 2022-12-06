<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

class TipsPaymentExternal extends TipsPayment
{
    /**
     * Enum: Cash, Card, External.
     */
    protected string $paymentTypeKind = 'External';
}
