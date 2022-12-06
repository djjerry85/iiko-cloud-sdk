<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

class PaymentExternal extends Payment
{
    /**
     * Enum: Cash, Card, IikoCard, External.
     */
    protected string $paymentTypeKind = 'External';
}
