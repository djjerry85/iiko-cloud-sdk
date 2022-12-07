<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\TipsPayment;

class TipsPaymentCard extends TipsPayment
{
    /**
     * Card No.
     *
     * - In iikoFront, it is possible to make card payment without card No.
     */
    protected ?string $number = null;

    /**
     * Enum: Cash, Card, External.
     */
    protected string $paymentTypeKind = 'Card';

    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }
}
