<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class DeliveryZone extends BaseResponse
{
    /**
     * Polygon name.
     */
    protected string $name;

    /**
     * A set of points describing a polygon.
     *
     * @var Coordinates[]
     */
    protected array $coordinates;

    /**
     * A set of addresses describing a polygon.
     *
     * @var DeliveryZoneAddress[]
     */
    protected array $addresses;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->coordinates = Coordinates::collection($this->coordinates);
        $this->addresses = DeliveryZoneAddress::collection($this->addresses);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Coordinates[]
     */
    public function getCoordinates(): array
    {
        return $this->coordinates;
    }

    /**
     * @param Coordinates[] $coordinates
     */
    public function setCoordinates(array $coordinates): void
    {
        $this->coordinates = $coordinates;
    }

    /**
     * @return DeliveryZoneAddress[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param DeliveryZoneAddress[] $addresses
     */
    public function setAddresses(array $addresses): void
    {
        $this->addresses = $addresses;
    }
}
