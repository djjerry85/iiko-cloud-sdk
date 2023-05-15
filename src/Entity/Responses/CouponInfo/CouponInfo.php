<?php

namespace UsePack\IikoCloud\Entity\Responses\CouponInfo;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class CouponInfo extends BaseResponse
{
    protected string $id;

    protected ?string $number = null;

    protected ?string $seriesName = null;

    protected string $seriesId;

    protected ?string $whenActivated = null;

    protected bool $isDeleted;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    public function getSeriesName(): ?string
    {
        return $this->seriesName;
    }

    public function setSeriesName(?string $seriesName): void
    {
        $this->seriesName = $seriesName;
    }

    public function getSeriesId(): string
    {
        return $this->seriesId;
    }

    public function setSeriesId(string $seriesId): void
    {
        $this->seriesId = $seriesId;
    }

    public function getWhenActivated(): ?string
    {
        return $this->whenActivated;
    }

    public function setWhenActivated(?string $whenActivated): void
    {
        $this->whenActivated = $whenActivated;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }
}
