<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class DeliveryRestrictionItem extends BaseResponse
{
    /**
     * The minimum order amount for a given point in a given time interval in this delivery zone.
     */
    protected ?float $minSum = null;

    /**
     * Terminal group ID.
     *
     * - Can be obtained by /api/1/terminal_groups operation.
     */
    protected ?string $terminalGroupId = null;

    /**
     * Organization ID.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected ?string $organizationId = null;

    /**
     * Name of delivery zone from cartography.
     */
    protected ?string $zone = null;

    /**
     * Days of the week.
     */
    protected int $weekMap;

    /**
     * The time from which the point can process orders from the selected zone, in minutes from the beginning of the day.
     */
    protected ?int $from = null;

    /**
     * The maximum time at which a point can carry an order to a given zone, in minutes from the beginning of the day.
     */
    protected ?int $to = null;

    /**
     * Priority of point in delivery zone.
     */
    protected int $priority;

    /**
     * Delivery duration in delivery zone.
     */
    protected int $deliveryDurationInMinutes;

    /**
     * Link to "delivery service payment".
     */
    protected ?string $deliveryServiceProductId = null;

    public function getMinSum(): ?float
    {
        return $this->minSum;
    }

    public function setMinSum(?float $minSum): void
    {
        $this->minSum = $minSum;
    }

    public function getTerminalGroupId(): ?string
    {
        return $this->terminalGroupId;
    }

    public function setTerminalGroupId(?string $terminalGroupId): void
    {
        $this->terminalGroupId = $terminalGroupId;
    }

    public function getOrganizationId(): ?string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(?string $organizationId): void
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

    public function getWeekMap(): int
    {
        return $this->weekMap;
    }

    public function setWeekMap(int $weekMap): void
    {
        $this->weekMap = $weekMap;
    }

    public function getFrom(): ?int
    {
        return $this->from;
    }

    public function setFrom(?int $from): void
    {
        $this->from = $from;
    }

    public function getTo(): ?int
    {
        return $this->to;
    }

    public function setTo(?int $to): void
    {
        $this->to = $to;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getDeliveryDurationInMinutes(): int
    {
        return $this->deliveryDurationInMinutes;
    }

    public function setDeliveryDurationInMinutes(int $deliveryDurationInMinutes): void
    {
        $this->deliveryDurationInMinutes = $deliveryDurationInMinutes;
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
