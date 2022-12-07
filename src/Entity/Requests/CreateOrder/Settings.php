<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class Settings extends BaseRequest
{
    protected ?int $transportToFrontTimeout = null;

    public function setTransportToFrontTimeout(int $seconds): void
    {
        $this->transportToFrontTimeout = $seconds;
    }
}
