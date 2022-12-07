<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\Payment;

class PaymentCard extends Payment
{
    /**
     * Card No.
     *
     * - In iikoFront, it is possible to make card payment without card No.
     */
    protected ?string $number;

    /**
     * Enum: Cash, Card, IikoCard, External.
     */
    protected string $paymentTypeKind = 'Card';

    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }
}
