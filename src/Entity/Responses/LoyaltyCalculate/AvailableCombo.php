<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class AvailableCombo extends BaseResponse
{
    /**
     * Id of combo specification, describing combo content.
     */
    protected string $specificationId;

    /**
     * Groups contained in combo. If null - there is no suitable product in order yet for that group.
     *
     * @var ComboGroupMapping[]
     */
    protected array $groupMapping;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->groupMapping = ComboGroupMapping::collection($this->groupMapping);
    }

    public function getSpecificationId(): string
    {
        return $this->specificationId;
    }

    public function setSpecificationId(string $specificationId): void
    {
        $this->specificationId = $specificationId;
    }

    /**
     * @return ComboGroupMapping[]
     */
    public function getGroupMapping(): array
    {
        return $this->groupMapping;
    }

    /**
     * @param ComboGroupMapping[] $groupMapping
     */
    public function setGroupMapping(array $groupMapping): void
    {
        $this->groupMapping = $groupMapping;
    }
}
