<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class DeliveryZoneAddressHouses extends BaseResponse
{
    /**
     * Type of house number range.
     *
     * - Enum: 0 1 2 3
     */
    protected int $type;

    /**
     * Starting house number.
     */
    protected int $startingNumber;

    /**
     * Maximum house number.
     */
    protected int $maxNumber;

    /**
     * Unlimited range.
     */
    protected bool $isUnlimitedRange;

    /**
     * Specific numbers.
     *
     * @var string[]
     */
    protected array $specificNumbers;

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getStartingNumber(): int
    {
        return $this->startingNumber;
    }

    public function setStartingNumber(int $startingNumber): void
    {
        $this->startingNumber = $startingNumber;
    }

    public function getMaxNumber(): int
    {
        return $this->maxNumber;
    }

    public function setMaxNumber(int $maxNumber): void
    {
        $this->maxNumber = $maxNumber;
    }

    public function isUnlimitedRange(): bool
    {
        return $this->isUnlimitedRange;
    }

    public function setIsUnlimitedRange(bool $isUnlimitedRange): void
    {
        $this->isUnlimitedRange = $isUnlimitedRange;
    }

    /**
     * @return string[]
     */
    public function getSpecificNumbers(): array
    {
        return $this->specificNumbers;
    }

    /**
     * @param string[] $specificNumbers
     */
    public function setSpecificNumbers(array $specificNumbers): void
    {
        $this->specificNumbers = $specificNumbers;
    }
}
