<?php

namespace UsePack\IikoCloud\Entity\Requests;

class MenuRequest extends BaseRequest
{
    protected string $organizationId;

    protected ?int $startRevision = null;

    public function __construct(string $organizationId)
    {
        $this->organizationId = $organizationId;
    }

    public function setStartRevision(?int $startRevision): void
    {
        $this->startRevision = $startRevision;
    }
}
