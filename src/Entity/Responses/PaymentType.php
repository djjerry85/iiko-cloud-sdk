<?php

namespace UsePack\IikoCloud\Entity\Responses;

class PaymentType extends BaseResponse
{
    public const PROCESSING_TYPE_EXTERNAL = 'External';
    public const PROCESSING_TYPE_INTERNAL = 'Internal';
    public const PROCESSING_TYPE_BOTH = 'Both';

    public const TYPE_KIND_UNKNOWN = 'Unknown';
    public const TYPE_KIND_CASH = 'Cash';
    public const TYPE_KIND_CARD = 'Card';
    public const TYPE_KIND_CREDIT = 'Credit';
    public const TYPE_KIND_WRITEOFF = 'Writeoff';
    public const TYPE_KIND_VOUCHER = 'Voucher';
    public const TYPE_KIND_EXTERNAL = 'External';
    public const TYPE_KIND_IIKO_CARD = 'IikoCard';

    /**
     * Payment type ID.
     */
    protected ?string $id;

    /**
     * Payment type code.
     */
    protected ?string $code;

    /**
     * Payment type name.
     */
    protected ?string $name;

    /**
     * Payment type comment.
     */
    protected ?string $comment;

    /**
     * Combinability attribute.
     */
    protected bool $combinable;

    /**
     * External system revision number.
     */
    protected ?int $externalRevision;

    /**
     * External system revision number.
     *
     * @var string[]
     */
    protected array $applicableMarketingCampaigns;

    /**
     * IsDeleted attribute of payment type.
     */
    protected bool $isDeleted;

    /**
     * If true, payment type is fiscal and bill will be printed.
     */
    protected bool $printCheque;

    /**
     * Describes operation processing type.
     *
     * - Enum: "External" "Internal" "Both"
     */
    protected ?string $paymentProcessingType;

    /**
     * Payment type category.
     *
     * - Enum: "Unknown" "Cash" "Card" "Credit" "Writeoff" "Voucher" "External" "IikoCard"
     */
    protected ?string $paymentTypeKind;

    /**
     * Terminal groups where this payment type is available.
     *
     * @var TerminalGroup[]
     */
    protected array $terminalGroups;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->terminalGroups = TerminalGroup::collection($this->terminalGroups);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function isCombinable(): bool
    {
        return $this->combinable;
    }

    public function getExternalRevision(): ?int
    {
        return $this->externalRevision;
    }

    /**
     * @return string[]
     */
    public function getApplicableMarketingCampaigns(): array
    {
        return $this->applicableMarketingCampaigns;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    public function isPrintCheque(): bool
    {
        return $this->printCheque;
    }

    public function getPaymentProcessingType(): ?string
    {
        return $this->paymentProcessingType;
    }

    public function getPaymentTypeKind(): ?string
    {
        return $this->paymentTypeKind;
    }

    /**
     * @return TerminalGroup[]
     */
    public function getTerminalGroups(): array
    {
        return $this->terminalGroups;
    }
}
