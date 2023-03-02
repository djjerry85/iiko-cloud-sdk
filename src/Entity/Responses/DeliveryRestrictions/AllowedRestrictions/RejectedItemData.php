<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions\AllowedRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class RejectedItemData extends BaseResponse
{
    /**
     * Point work time start.
     */
    protected ?string $dateFrom = null;

    /**
     * Point work time end.
     */
    protected ?string $dateTo = null;

    /**
     * Allowed week days.
     *
     * @var string[]|null
     */
    protected ?array $allowedWeekDays = null;

    /**
     * Order min sum.
     */
    protected ?float $minSum = null;

    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }

    public function setDateFrom(?string $dateFrom): void
    {
        $this->dateFrom = $dateFrom;
    }

    public function getDateTo(): ?string
    {
        return $this->dateTo;
    }

    public function setDateTo(?string $dateTo): void
    {
        $this->dateTo = $dateTo;
    }

    /**
     * @return string[]|null
     */
    public function getAllowedWeekDays(): ?array
    {
        return $this->allowedWeekDays;
    }

    /**
     * @param string[]|null $allowedWeekDays
     */
    public function setAllowedWeekDays(?array $allowedWeekDays): void
    {
        $this->allowedWeekDays = $allowedWeekDays;
    }

    public function getMinSum(): ?float
    {
        return $this->minSum;
    }

    public function setMinSum(?float $minSum): void
    {
        $this->minSum = $minSum;
    }
}
