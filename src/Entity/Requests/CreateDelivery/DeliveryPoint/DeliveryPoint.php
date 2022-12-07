<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateDelivery\DeliveryPoint;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class DeliveryPoint extends BaseRequest
{
    /**
     * Order delivery address.
     */
    protected ?Coordinates $coordinates = null;

    /**
     * Order delivery address.
     */
    protected ?Address $address = null;

    /**
     * Delivery location custom code in customer's API system.
     *
     * - [ 0 .. 100 ] characters
     */
    protected ?string $externalCartographyId = null;

    /**
     * Additional information.
     *
     * - [ 0 .. 500 ] characters
     */
    protected ?string $comment = null;

    public function setCoordinates(?Coordinates $coordinates): void
    {
        $this->coordinates = $coordinates;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    public function setExternalCartographyId(?string $externalCartographyId): void
    {
        $this->externalCartographyId = $externalCartographyId;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }
}
