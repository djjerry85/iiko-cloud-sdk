<?php

namespace UsePack\IikoCloud\Entity\Responses;

class Organization extends BaseResponse
{
    public const RESPONSE_TYPE_SIMPLE = 'Simple';
    public const RESPONSE_TYPE_EXTENDED = 'Extended';

    public const DELIVERY_SERVICE_TYPE_COURIER_ONLY = 'CourierOnly';
    public const DELIVERY_SERVICE_TYPE_SELF_SERVICE_ONLY = 'SelfServiceOnly';
    public const DELIVERY_SERVICE_TYPE_COURIER_AND_SELF_SERVICE = 'CourierAndSelfService';

    public const ADDRESS_FORMAT_TYPE_LEGACY = 'Legacy';
    public const ADDRESS_FORMAT_TYPE_CITY = 'City';
    public const ADDRESS_FORMAT_TYPE_INTERNATIONAL = 'International';
    public const ADDRESS_FORMAT_TYPE_INT_NO_POSTCODE = 'IntNoPostcode';

    public const ADDRESS_LOOKUP_DA_DATA = 'DaData';
    public const ADDRESS_LOOKUP_GET_ADDRESS = 'GetAddress';

    /**
     * Country.
     */
    protected ?string $country;

    /**
     * Restaurant address.
     */
    protected ?string $restaurantAddress;

    /**
     * Latitude.
     */
    protected float $latitude;

    /**
     * Longitude.
     */
    protected float $longitude;

    /**
     * Regional setting "Use the UAE Addressing System".
     */
    protected bool $useUaeAddressingSystem;

    /**
     * iikoRms version.
     */
    protected string $version;

    /**
     * ISO currency code (for example: RUB, USD, EUR).
     */
    protected ?string $currencyIsoName;

    /**
     * Value rounding of position.
     */
    protected ?float $currencyMinimumDenomination;

    /**
     * Country dialing code.
     */
    protected ?string $countryPhoneCode;

    /**
     * Require mandatory marketing source input when creating a delivery.
     */
    protected ?bool $marketingSourceRequiredInDelivery;

    /**
     * Default delivery city.
     */
    protected ?string $defaultDeliveryCityId;

    /**
     * Delivery cities.
     */
    protected ?array $deliveryCityIds;

    /**
     * Delivery type.
     *
     * Enum: "CourierOnly" "SelfServiceOnly" "CourierAndSelfService"
     */
    protected ?string $deliveryServiceType;

    /**
     * Default payment type for CallCenter.
     */
    protected ?string $defaultCallCenterPaymentTypeId;

    /**
     * Allow text comments for order items (in all restaurant sections).
     */
    protected ?bool $orderItemCommentEnabled;

    /**
     * Restaurant`s INN (Taxpayer Identification Number).
     */
    protected ?string $inn;

    /**
     * Address format type.
     *
     * Enum: "Legacy" "City" "International" "IntNoPostcode"
     */
    protected string $addressFormatType;

    /**
     * Determines whether to use delivery confirmation.
     */
    protected ?bool $isConfirmationEnabled;

    /**
     * Confirm orders time interval.
     */
    protected ?int $confirmAllowedIntervalInMinutes;

    /**
     * Determines whether organization is hosted in iikoCloud.
     */
    protected bool $isCloud;

    /**
     * If the store allows orders for anonymous guests,
     * then it is not necessary to transfer information about the guest as part of the delivery order.
     * You can only transfer the phone number and optionally name of the guest,
     * which will not be stored in the guest base and will only be used for the delivery of a current delivery order.
     */
    protected ?bool $isAnonymousGuestsAllowed;

    /**
     * Available address lookup services.
     *
     * Items Enum: "DaData" "GetAddress"
     *
     * @var string[]
     */
    protected array $addressLookup;

    /**
     * Organization ID.
     */
    protected string $id;

    /**
     * Organization name.
     */
    protected ?string $name;

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function getRestaurantAddress(): ?string
    {
        return $this->restaurantAddress;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function isUseUaeAddressingSystem(): bool
    {
        return $this->useUaeAddressingSystem;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getCurrencyIsoName(): ?string
    {
        return $this->currencyIsoName;
    }

    public function getCurrencyMinimumDenomination(): ?float
    {
        return $this->currencyMinimumDenomination;
    }

    public function getCountryPhoneCode(): ?string
    {
        return $this->countryPhoneCode;
    }

    public function getMarketingSourceRequiredInDelivery(): ?bool
    {
        return $this->marketingSourceRequiredInDelivery;
    }

    public function getDefaultDeliveryCityId(): ?string
    {
        return $this->defaultDeliveryCityId;
    }

    public function getDeliveryCityIds(): ?array
    {
        return $this->deliveryCityIds;
    }

    public function getDeliveryServiceType(): ?string
    {
        return $this->deliveryServiceType;
    }

    public function getDefaultCallCenterPaymentTypeId(): ?string
    {
        return $this->defaultCallCenterPaymentTypeId;
    }

    public function getOrderItemCommentEnabled(): ?bool
    {
        return $this->orderItemCommentEnabled;
    }

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function getAddressFormatType(): string
    {
        return $this->addressFormatType;
    }

    public function getIsConfirmationEnabled(): ?bool
    {
        return $this->isConfirmationEnabled;
    }

    public function getConfirmAllowedIntervalInMinutes(): ?int
    {
        return $this->confirmAllowedIntervalInMinutes;
    }

    public function isCloud(): bool
    {
        return $this->isCloud;
    }

    public function getIsAnonymousGuestsAllowed(): ?bool
    {
        return $this->isAnonymousGuestsAllowed;
    }

    public function getAddressLookup(): array
    {
        return $this->addressLookup;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
