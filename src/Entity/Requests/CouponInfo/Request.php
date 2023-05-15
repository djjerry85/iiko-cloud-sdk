<?php

namespace UsePack\IikoCloud\Entity\Requests\CouponInfo;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class Request extends BaseRequest
{
    protected string $organizationId;

    protected string $number;

    protected ?string $series = null;

    public function __construct(string $organizationId, string $number, ?string $series = null)
    {
        $this->organizationId = $organizationId;
        $this->number = $number;
        $this->series = $series;
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(string $organizationId): void
    {
        $this->organizationId = $organizationId;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function getSeries(): ?string
    {
        return $this->series;
    }

    public function setSeries(?string $series): void
    {
        $this->series = $series;
    }
}
