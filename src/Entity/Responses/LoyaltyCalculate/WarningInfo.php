<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class WarningInfo extends BaseResponse
{
    protected ?string $Code = null;

    protected ?string $ErrorCode = null;

    protected ?string $Message = null;

    public function getCode(): ?string
    {
        return $this->Code;
    }

    public function setCode(?string $Code): void
    {
        $this->Code = $Code;
    }

    public function getErrorCode(): ?string
    {
        return $this->ErrorCode;
    }

    public function setErrorCode(?string $ErrorCode): void
    {
        $this->ErrorCode = $ErrorCode;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(?string $Message): void
    {
        $this->Message = $Message;
    }
}
