<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class OrderGuests extends BaseRequest
{
    /**
     * Guests count.
     */
    protected int $count;

    public function __construct(int $count)
    {
        $this->count = $count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }
}
