<?php

namespace UsePack\IikoCloud\Entity\Responses;

class ProductModifier extends BaseResponse
{
    /**
     * ID.
     */
    protected string $id;

    /**
     * Default quantity.
     */
    protected ?int $defaultAmount;

    /**
     * Minimum quantity.
     */
    protected int $minAmount;

    /**
     * Maximum quantity.
     */
    protected int $maxAmount;

    /**
     * Required availability.
     */
    protected ?bool $required;

    /**
     * Hide if default amount applied. This field is supported since 7.2.4 iikoRMS version.
     */
    protected ?bool $hideIfDefaultAmount;

    /**
     * Modifier can be split. This field is supported since 7.2.4 iikoRMS version.
     */
    protected ?bool $splittable;

    /**
     * Free of charge amount. This field is supported since 7.2.4 iikoRMS version.
     */
    protected ?int $freeOfChargeAmount;

    public function getId(): string
    {
        return $this->id;
    }

    public function getDefaultAmount(): ?int
    {
        return $this->defaultAmount;
    }

    public function getMinAmount(): int
    {
        return $this->minAmount;
    }

    public function getMaxAmount(): int
    {
        return $this->maxAmount;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function getHideIfDefaultAmount(): ?bool
    {
        return $this->hideIfDefaultAmount;
    }

    public function getSplittable(): ?bool
    {
        return $this->splittable;
    }

    public function getFreeOfChargeAmount(): ?int
    {
        return $this->freeOfChargeAmount;
    }
}
