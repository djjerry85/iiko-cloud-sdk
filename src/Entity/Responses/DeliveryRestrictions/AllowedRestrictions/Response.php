<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions\AllowedRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    /**
     * Operation ID.
     */
    protected string $correlationId;

    /**
     * A sign of successful verification.
     */
    protected bool $isAllowed;

    /**
     * Reject cause.
     */
    protected ?string $rejectCause = null;

    /**
     * Delivery address ID in external mapping system.
     */
    protected ?string $addressExternalId = null;

    /**
     * Coordinates returned by geocoding service.
     */
    protected mixed $location = null;

    /**
     * Suitable terminal groups with a delivery duration for them.
     *
     * @var AllowedItem[]
     */
    protected array $allowedItems = [];

    /**
     * Rejected items with cause.
     *
     * @var RejectedItem[]
     */
    protected array $rejectedItems = [];

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        if (!is_null($this->location)) {
            $this->location = Location::create($this->location);
        }

        $this->allowedItems = AllowedItem::collection($this->allowedItems);
        $this->rejectedItems = RejectedItem::collection($this->rejectedItems);
    }

    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }

    public function setCorrelationId(string $correlationId): void
    {
        $this->correlationId = $correlationId;
    }

    public function isAllowed(): bool
    {
        return $this->isAllowed;
    }

    public function setIsAllowed(bool $isAllowed): void
    {
        $this->isAllowed = $isAllowed;
    }

    public function getRejectCause(): ?string
    {
        return $this->rejectCause;
    }

    public function setRejectCause(?string $rejectCause): void
    {
        $this->rejectCause = $rejectCause;
    }

    public function getAddressExternalId(): ?string
    {
        return $this->addressExternalId;
    }

    public function setAddressExternalId(?string $addressExternalId): void
    {
        $this->addressExternalId = $addressExternalId;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return AllowedItem[]
     */
    public function getAllowedItems(): array
    {
        return $this->allowedItems;
    }

    /**
     * @param AllowedItem[] $allowedItems
     */
    public function setAllowedItems(array $allowedItems): void
    {
        $this->allowedItems = $allowedItems;
    }

    /**
     * @return RejectedItem[]
     */
    public function getRejectedItems(): array
    {
        return $this->rejectedItems;
    }

    /**
     * @param RejectedItem[] $rejectedItems
     */
    public function setRejectedItems(array $rejectedItems): void
    {
        $this->rejectedItems = $rejectedItems;
    }
}
