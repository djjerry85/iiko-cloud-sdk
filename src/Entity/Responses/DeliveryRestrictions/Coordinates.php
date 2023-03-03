<?php

namespace UsePack\IikoCloud\Entity\Responses\DeliveryRestrictions;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Coordinates extends BaseResponse
{
    /**
     * Latitude.
     */
    protected float $latitude;

    /**
     * Longitude.
     */
    protected float $longitude;

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }
}
