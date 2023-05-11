<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    /**
     * Loyalty program results.
     *
     * @var LoyaltyProgramResult[]
     */
    protected array $loyaltyProgramResults = [];

    /**
     * Marketing campaigns with available payments.
     *
     * @var AvailablePayment[]
     */
    protected array $availablePayments = [];

    /**
     * Warnings about errors, not blocking loyalty calculation.
     *
     * @var string[]
     */
    protected array $validationWarnings = [];

    /**
     * Warnings about errors, not blocking loyalty calculation.
     *
     * @var WarningInfo[]
     */
    protected array $Warnings = [];

    /**
     * Loyalty trace. Can be null.
     */
    protected ?string $loyaltyTrace = null;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->loyaltyProgramResults = LoyaltyProgramResult::collection($this->loyaltyProgramResults);
        $this->availablePayments = AvailablePayment::collection($this->availablePayments);
        $this->Warnings = WarningInfo::collection($this->Warnings);
    }

    /**
     * @return LoyaltyProgramResult[]
     */
    public function getLoyaltyProgramResults(): array
    {
        return $this->loyaltyProgramResults;
    }

    /**
     * @param LoyaltyProgramResult[] $loyaltyProgramResults
     */
    public function setLoyaltyProgramResults(array $loyaltyProgramResults): void
    {
        $this->loyaltyProgramResults = $loyaltyProgramResults;
    }

    /**
     * @return AvailablePayment[]
     */
    public function getAvailablePayments(): array
    {
        return $this->availablePayments;
    }

    /**
     * @param AvailablePayment[] $availablePayments
     */
    public function setAvailablePayments(array $availablePayments): void
    {
        $this->availablePayments = $availablePayments;
    }

    /**
     * @return string[]
     */
    public function getValidationWarnings(): array
    {
        return $this->validationWarnings;
    }

    /**
     * @param string[] $validationWarnings
     */
    public function setValidationWarnings(array $validationWarnings): void
    {
        $this->validationWarnings = $validationWarnings;
    }

    /**
     * @return WarningInfo[]
     */
    public function getWarnings(): array
    {
        return $this->Warnings;
    }

    /**
     * @param WarningInfo[] $Warnings
     */
    public function setWarnings(array $Warnings): void
    {
        $this->Warnings = $Warnings;
    }

    public function getLoyaltyTrace(): ?string
    {
        return $this->loyaltyTrace;
    }

    public function setLoyaltyTrace(?string $loyaltyTrace): void
    {
        $this->loyaltyTrace = $loyaltyTrace;
    }
}
