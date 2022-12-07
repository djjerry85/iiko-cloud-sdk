<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateDelivery\DeliveryPoint;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class AddressStreet extends BaseRequest
{
    /**
     * Street ID in classifier, e.g., address database.
     *
     * - [ 0 .. 255 ] characters
     */
    protected ?string $classifierId = null;

    /**
     * ID.
     *
     * Can be obtained by /api/1/streets/by_city operation.
     */
    protected ?string $id = null;

    /**
     * Name.
     *
     * [ 0 .. 60 ] characters
     */
    protected ?string $name = null;

    /**
     * City name.
     *
     * [ 0 .. 60 ] characters
     */
    protected ?string $city = null;

    public function setClassifierId(?string $classifierId): void
    {
        $this->classifierId = $classifierId;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }
}
