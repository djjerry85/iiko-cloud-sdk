<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateDelivery\DeliveryPoint;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class Address extends BaseRequest
{
    /**
     * Street.
     */
    protected AddressStreet $street;

    /**
     * Postcode.
     *
     * - [ 0 .. 10 ] characters
     */
    protected ?string $index = null;

    /**
     * House.
     *
     * - [ 0 .. 100 ] characters
     * - In case useUaeAddressingSystem enabled max length - 100, otherwise - 10
     */
    protected string $house;

    /**
     * Building.
     *
     * - [ 0 .. 10 ] characters
     */
    protected ?string $building = null;

    /**
     * Apartment.
     *
     * - [ 0 .. 100 ] characters
     * - In case useUaeAddressingSystem enabled max length - 100, otherwise - 10
     */
    protected ?string $flat = null;

    /**
     * Entrance.
     *
     * - [ 0 .. 10 ] characters
     */
    protected ?string $entrance = null;

    /**
     * Floor.
     *
     * - [ 0 .. 10 ] characters
     */
    protected ?string $floor = null;

    /**
     * Intercom.
     *
     * - [ 0 .. 10 ] characters
     */
    protected ?string $doorphone = null;

    /**
     * Delivery area ID.
     */
    protected ?string $regionId = null;

    public function __construct(AddressStreet $street, string $house)
    {
        $this->street = $street;
        $this->house = $house;
    }

    public function setStreet(AddressStreet $street): void
    {
        $this->street = $street;
    }

    public function setIndex(?string $index): void
    {
        $this->index = $index;
    }

    public function setHouse(string $house): void
    {
        $this->house = $house;
    }

    public function setBuilding(?string $building): void
    {
        $this->building = $building;
    }

    public function setFlat(?string $flat): void
    {
        $this->flat = $flat;
    }

    public function setEntrance(?string $entrance): void
    {
        $this->entrance = $entrance;
    }

    public function setFloor(?string $floor): void
    {
        $this->floor = $floor;
    }

    public function setDoorphone(?string $doorphone): void
    {
        $this->doorphone = $doorphone;
    }

    public function setRegionId(?string $regionId): void
    {
        $this->regionId = $regionId;
    }
}
