<?php

namespace UsePack\IikoCloud\Entity\Responses\CreateOrder;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class ErrorInfo extends BaseResponse
{
    /**
     * Error code.
     */
    protected string $code;

    /**
     * Nonlocalized message.
     */
    protected ?string $message;

    /**
     * Localized message.
     */
    protected ?string $description;

    /**
     * Additional information.
     */
    protected mixed $additionalData;

    public function getCode(): string
    {
        return $this->code;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getAdditionalData(): mixed
    {
        return $this->additionalData;
    }
}
