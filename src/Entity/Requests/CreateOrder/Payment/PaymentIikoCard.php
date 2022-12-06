<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

class PaymentIikoCard extends Payment
{
    /**
     * Enum: Cash, Card, IikoCard, External.
     */
    protected string $paymentTypeKind = 'IikoCard';
}
