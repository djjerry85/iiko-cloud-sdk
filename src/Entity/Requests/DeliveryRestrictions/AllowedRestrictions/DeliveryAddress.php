<?php

namespace UsePack\IikoCloud\Entity\Requests\DeliveryRestrictions\AllowedRestrictions;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class DeliveryAddress extends BaseRequest
{
    /**
     * City.
     */
    protected ?string $city = null;

    /**
     * Street.
     */
    protected ?string $streetName = null;

    /**
     * Street ID.
     */
    protected ?string $streetId = null;

    /**
     * House.
     */
    protected ?string $house = null;

    /**
     * Building.
     */
    protected ?string $building = null;

    /**
     * Postcode.
     */
    protected ?string $index = null;

    public function __construct(?string $city, ?string $streetName, ?string $streetId, ?string $house, ?string $building, ?string $index)
    {
        $this->city = $city;
        $this->streetName = $streetName;
        $this->streetId = $streetId;
        $this->house = $house;
        $this->building = $building;
        $this->index = $index;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function setStreetName(?string $streetName): void
    {
        $this->streetName = $streetName;
    }

    public function getStreetId(): ?string
    {
        return $this->streetId;
    }

    public function setStreetId(?string $streetId): void
    {
        $this->streetId = $streetId;
    }

    public function getHouse(): ?string
    {
        return $this->house;
    }

    public function setHouse(?string $house): void
    {
        $this->house = $house;
    }

    public function getBuilding(): ?string
    {
        return $this->building;
    }

    public function setBuilding(?string $building): void
    {
        $this->building = $building;
    }

    public function getIndex(): ?string
    {
        return $this->index;
    }

    public function setIndex(?string $index): void
    {
        $this->index = $index;
    }
}
