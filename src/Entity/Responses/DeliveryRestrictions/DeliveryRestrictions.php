<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class DeliveryRestrictions extends BaseResponse
{
    /**
     * Organization ID.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected string $organizationId;

    /**
     * Geocoding service type.
     *
     * - Enum: 1 2 3 4
     */
    protected int $deliveryGeocodeServiceType;

    /**
     * Link to the map of delivery service regions.
     */
    protected ?string $deliveryRegionsMapUrl = null;

    /**
     * General standard of delivery time.
     */
    protected int $defaultDeliveryDurationInMinutes;

    /**
     * Default pickup time.
     */
    protected int $defaultSelfServiceDurationInMinutes;

    /**
     * Indication that all delivery points in all delivery zones use common delivery time limits.
     */
    protected bool $useSameDeliveryDuration;

    /**
     * Indication that all delivery points for all delivery zones use the total minimum order amount.
     */
    protected bool $useSameMinSum;

    /**
     * Indication that all delivery points for all delivery zones use the total minimum order amount.
     */
    protected ?float $defaultMinSum = null;

    /**
     * Indication that all delivery points in all zones use common time limits.
     */
    protected bool $useSameWorkTimeInterval;

    /**
     * The beginning of the interval of the total work time for all points and delivery zones, in minutes from the beginning of the day.
     */
    protected ?int $defaultFrom = null;

    /**
     * End of the total work time interval for all points and delivery zones, in minutes from the beginning of the day.
     */
    protected ?int $defaultTo = null;

    /**
     * Indication that all delivery points in all zones use the same schedule for all days of the week.
     */
    protected bool $useSameRestrictionsOnAllWeek;

    /**
     * Restrictions.
     *
     * @var DeliveryRestrictionItem[]
     */
    protected array $restrictions;

    /**
     * Delivery zones.
     *
     * @var DeliveryZone[]
     */
    protected array $deliveryZones;

    /**
     * Reject delivery if we could not geocode the address.
     */
    protected bool $rejectOnGeocodingError;

    /**
     * Add shipping cost to order.
     */
    protected bool $addDeliveryServiceCost;

    /**
     * Indication that the cost is the same for all points of delivery.
     */
    protected bool $useSameDeliveryServiceProduct;

    /**
     * Indication that the cost is the same for all points of delivery.
     */
    protected ?string $defaultDeliveryServiceProductId = null;

    /**
     * Use external delivery distribution service.
     */
    protected bool $useExternalAssignationService;

    /**
     * Indication whether or not to trust on the fronts the call center mapping restrictions from the call center if the composition of the order has not changed since the last check. If true, then trust.
     */
    protected bool $frontTrustsCallCenterCheck;

    /**
     * Address of external delivery distribution service.
     */
    protected ?string $externalAssignationServiceUrl = null;

    /**
     * Require an exact geocoding address.
     */
    protected bool $requireExactAddressForGeocoding;

    /**
     * Delivery restrictions mode.
     *
     * - Enum: 0 1 2
     */
    protected int $zonesMode;

    /**
     * Automatically assigned delivery method based on cartography.
     */
    protected bool $autoAssignExternalDeliveries;

    /**
     * Action on problems with auto-assignment.
     *
     * - Enum: 1 2
     */
    protected int $actionOnValidationRejection;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->restrictions = DeliveryRestrictionItem::collection($this->restrictions);
        $this->deliveryZones = DeliveryZone::collection($this->deliveryZones);
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(string $organizationId): void
    {
        $this->organizationId = $organizationId;
    }

    public function getDeliveryGeocodeServiceType(): int
    {
        return $this->deliveryGeocodeServiceType;
    }

    public function setDeliveryGeocodeServiceType(int $deliveryGeocodeServiceType): void
    {
        $this->deliveryGeocodeServiceType = $deliveryGeocodeServiceType;
    }

    public function getDeliveryRegionsMapUrl(): ?string
    {
        return $this->deliveryRegionsMapUrl;
    }

    public function setDeliveryRegionsMapUrl(?string $deliveryRegionsMapUrl): void
    {
        $this->deliveryRegionsMapUrl = $deliveryRegionsMapUrl;
    }

    public function getDefaultDeliveryDurationInMinutes(): int
    {
        return $this->defaultDeliveryDurationInMinutes;
    }

    public function setDefaultDeliveryDurationInMinutes(int $defaultDeliveryDurationInMinutes): void
    {
        $this->defaultDeliveryDurationInMinutes = $defaultDeliveryDurationInMinutes;
    }

    public function getDefaultSelfServiceDurationInMinutes(): int
    {
        return $this->defaultSelfServiceDurationInMinutes;
    }

    public function setDefaultSelfServiceDurationInMinutes(int $defaultSelfServiceDurationInMinutes): void
    {
        $this->defaultSelfServiceDurationInMinutes = $defaultSelfServiceDurationInMinutes;
    }

    public function isUseSameDeliveryDuration(): bool
    {
        return $this->useSameDeliveryDuration;
    }

    public function setUseSameDeliveryDuration(bool $useSameDeliveryDuration): void
    {
        $this->useSameDeliveryDuration = $useSameDeliveryDuration;
    }

    public function isUseSameMinSum(): bool
    {
        return $this->useSameMinSum;
    }

    public function setUseSameMinSum(bool $useSameMinSum): void
    {
        $this->useSameMinSum = $useSameMinSum;
    }

    public function getDefaultMinSum(): ?float
    {
        return $this->defaultMinSum;
    }

    public function setDefaultMinSum(?float $defaultMinSum): void
    {
        $this->defaultMinSum = $defaultMinSum;
    }

    public function isUseSameWorkTimeInterval(): bool
    {
        return $this->useSameWorkTimeInterval;
    }

    public function setUseSameWorkTimeInterval(bool $useSameWorkTimeInterval): void
    {
        $this->useSameWorkTimeInterval = $useSameWorkTimeInterval;
    }

    public function getDefaultFrom(): ?int
    {
        return $this->defaultFrom;
    }

    public function setDefaultFrom(?int $defaultFrom): void
    {
        $this->defaultFrom = $defaultFrom;
    }

    public function getDefaultTo(): ?int
    {
        return $this->defaultTo;
    }

    public function setDefaultTo(?int $defaultTo): void
    {
        $this->defaultTo = $defaultTo;
    }

    public function isUseSameRestrictionsOnAllWeek(): bool
    {
        return $this->useSameRestrictionsOnAllWeek;
    }

    public function setUseSameRestrictionsOnAllWeek(bool $useSameRestrictionsOnAllWeek): void
    {
        $this->useSameRestrictionsOnAllWeek = $useSameRestrictionsOnAllWeek;
    }

    /**
     * @return DeliveryRestrictionItem[]
     */
    public function getRestrictions(): array
    {
        return $this->restrictions;
    }

    /**
     * @param DeliveryRestrictionItem[] $restrictions
     */
    public function setRestrictions(array $restrictions): void
    {
        $this->restrictions = $restrictions;
    }

    /**
     * @return DeliveryZone[]
     */
    public function getDeliveryZones(): array
    {
        return $this->deliveryZones;
    }

    /**
     * @param DeliveryZone[] $deliveryZones
     */
    public function setDeliveryZones(array $deliveryZones): void
    {
        $this->deliveryZones = $deliveryZones;
    }

    public function isRejectOnGeocodingError(): bool
    {
        return $this->rejectOnGeocodingError;
    }

    public function setRejectOnGeocodingError(bool $rejectOnGeocodingError): void
    {
        $this->rejectOnGeocodingError = $rejectOnGeocodingError;
    }

    public function isAddDeliveryServiceCost(): bool
    {
        return $this->addDeliveryServiceCost;
    }

    public function setAddDeliveryServiceCost(bool $addDeliveryServiceCost): void
    {
        $this->addDeliveryServiceCost = $addDeliveryServiceCost;
    }

    public function isUseSameDeliveryServiceProduct(): bool
    {
        return $this->useSameDeliveryServiceProduct;
    }

    public function setUseSameDeliveryServiceProduct(bool $useSameDeliveryServiceProduct): void
    {
        $this->useSameDeliveryServiceProduct = $useSameDeliveryServiceProduct;
    }

    public function getDefaultDeliveryServiceProductId(): ?string
    {
        return $this->defaultDeliveryServiceProductId;
    }

    public function setDefaultDeliveryServiceProductId(?string $defaultDeliveryServiceProductId): void
    {
        $this->defaultDeliveryServiceProductId = $defaultDeliveryServiceProductId;
    }

    public function isUseExternalAssignationService(): bool
    {
        return $this->useExternalAssignationService;
    }

    public function setUseExternalAssignationService(bool $useExternalAssignationService): void
    {
        $this->useExternalAssignationService = $useExternalAssignationService;
    }

    public function isFrontTrustsCallCenterCheck(): bool
    {
        return $this->frontTrustsCallCenterCheck;
    }

    public function setFrontTrustsCallCenterCheck(bool $frontTrustsCallCenterCheck): void
    {
        $this->frontTrustsCallCenterCheck = $frontTrustsCallCenterCheck;
    }

    public function getExternalAssignationServiceUrl(): ?string
    {
        return $this->externalAssignationServiceUrl;
    }

    public function setExternalAssignationServiceUrl(?string $externalAssignationServiceUrl): void
    {
        $this->externalAssignationServiceUrl = $externalAssignationServiceUrl;
    }

    public function isRequireExactAddressForGeocoding(): bool
    {
        return $this->requireExactAddressForGeocoding;
    }

    public function setRequireExactAddressForGeocoding(bool $requireExactAddressForGeocoding): void
    {
        $this->requireExactAddressForGeocoding = $requireExactAddressForGeocoding;
    }

    public function getZonesMode(): int
    {
        return $this->zonesMode;
    }

    public function setZonesMode(int $zonesMode): void
    {
        $this->zonesMode = $zonesMode;
    }

    public function isAutoAssignExternalDeliveries(): bool
    {
        return $this->autoAssignExternalDeliveries;
    }

    public function setAutoAssignExternalDeliveries(bool $autoAssignExternalDeliveries): void
    {
        $this->autoAssignExternalDeliveries = $autoAssignExternalDeliveries;
    }

    public function getActionOnValidationRejection(): int
    {
        return $this->actionOnValidationRejection;
    }

    public function setActionOnValidationRejection(int $actionOnValidationRejection): void
    {
        $this->actionOnValidationRejection = $actionOnValidationRejection;
    }
}
