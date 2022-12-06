<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

class PaymentCash extends Payment
{
    /**
     * Enum: Cash, Card, IikoCard, External.
     */
    protected string $paymentTypeKind = 'Cash';
}
