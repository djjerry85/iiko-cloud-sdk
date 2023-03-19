<?php

namespace UsePack\IikoCloud\Entity\Responses\Webhook\UpdateSettings;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    /**
     * Operation ID.
     */
    protected string $correlationId;

    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }
}
