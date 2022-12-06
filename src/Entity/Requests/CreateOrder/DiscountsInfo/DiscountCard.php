<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class DiscountCard extends BaseRequest
{
    /**
     * Track of discount card to be applied to order.
     */
    protected string $track;

    public function __construct(string $track)
    {
        $this->track = $track;
    }

    public function setTrack(string $track): void
    {
        $this->track = $track;
    }
}
