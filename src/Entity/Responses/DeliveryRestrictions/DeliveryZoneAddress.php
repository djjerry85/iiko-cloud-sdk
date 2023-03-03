<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class DeliveryZoneAddress extends BaseResponse
{
    /**
     * ID of the delivery zone's street.
     */
    protected string $streetId;

    /**
     * Postcode.
     */
    protected string $postcode;

    /**
     * Range of house numbers in the delivery zone.
     *
     * @var DeliveryZoneAddressHouses
     */
    protected mixed $houses;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->houses = DeliveryZoneAddressHouses::create($this->houses);
    }

    public function getStreetId(): string
    {
        return $this->streetId;
    }

    public function setStreetId(string $streetId): void
    {
        $this->streetId = $streetId;
    }

    public function getPostcode(): string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): void
    {
        $this->postcode = $postcode;
    }

    public function getHouses(): DeliveryZoneAddressHouses
    {
        return $this->houses;
    }

    public function setHouses(DeliveryZoneAddressHouses $houses): void
    {
        $this->houses = $houses;
    }
}
