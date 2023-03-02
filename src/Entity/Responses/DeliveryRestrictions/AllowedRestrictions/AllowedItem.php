<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions\AllowedRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class AllowedItem extends BaseResponse
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
     * Delivery duration in minutes.
     */
    protected int $deliveryDurationInMinutes;

    /**
     * Delivery zone name which this TerminalGroupId belongs to.
     */
    protected ?string $zone;

    /**
     * Link to "delivery service payment".
     */
    protected ?string $deliveryServiceProductId;

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

    public function getDeliveryDurationInMinutes(): int
    {
        return $this->deliveryDurationInMinutes;
    }

    public function setDeliveryDurationInMinutes(int $deliveryDurationInMinutes): void
    {
        $this->deliveryDurationInMinutes = $deliveryDurationInMinutes;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(?string $zone): void
    {
        $this->zone = $zone;
    }

    public function getDeliveryServiceProductId(): ?string
    {
        return $this->deliveryServiceProductId;
    }

    public function setDeliveryServiceProductId(?string $deliveryServiceProductId): void
    {
        $this->deliveryServiceProductId = $deliveryServiceProductId;
    }
}
