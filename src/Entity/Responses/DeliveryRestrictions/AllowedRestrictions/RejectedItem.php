<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions\AllowedRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class RejectedItem extends BaseResponse
{
    /**
     * Terminal group ID.
     *
     * - Can be obtained by /api/1/terminal_groups operation.
     */
    protected string $terminalGroupId;

    /**
     * Organization ID.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected string $organizationId;

    /**
     * Delivery zone name which this TerminalGroupId belongs to.
     */
    protected ?string $zone = null;

    /**
     * Reject cause code.
     *
     * - Enum: "Undefined" "SumIsLessThenMinimum" "DayOfWeekIsUnacceptable" "DeliveryTimeIsUnacceptable" "OutOfTerminalZone"
     */
    protected string $rejectCode;

    /**
     * Reject hint.
     */
    protected string $rejectHint;

    /**
     * Reject additional information.
     */
    protected mixed $rejectItemData;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        if (!is_null($this->rejectItemData)) {
            $this->rejectItemData = RejectedItemData::create($this->rejectItemData);
        }
    }

    public function getTerminalGroupId(): string
    {
        return $this->terminalGroupId;
    }

    public function setTerminalGroupId(string $terminalGroupId): void
    {
        $this->terminalGroupId = $terminalGroupId;
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(string $organizationId): void
    {
        $this->organizationId = $organizationId;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(?string $zone): void
    {
        $this->zone = $zone;
    }

    public function getRejectCode(): string
    {
        return $this->rejectCode;
    }

    public function setRejectCode(string $rejectCode): void
    {
        $this->rejectCode = $rejectCode;
    }

    public function getRejectHint(): string
    {
        return $this->rejectHint;
    }

    public function setRejectHint(string $rejectHint): void
    {
        $this->rejectHint = $rejectHint;
    }

    public function getRejectItemData(): ?RejectedItemData
    {
        return $this->rejectItemData;
    }

    public function setRejectItemData(?RejectedItemData $rejectItemData): void
    {
        $this->rejectItemData = $rejectItemData;
    }
}
