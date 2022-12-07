<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\Payment;

class PaymentIikoCard extends Payment
{
    /**
     * Enum: Cash, Card, IikoCard, External.
     */
    protected string $paymentTypeKind = 'IikoCard';
}
