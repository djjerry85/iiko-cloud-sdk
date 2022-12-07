<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\Payment;

class PaymentExternal extends Payment
{
    /**
     * Enum: Cash, Card, IikoCard, External.
     */
    protected string $paymentTypeKind = 'External';
}
