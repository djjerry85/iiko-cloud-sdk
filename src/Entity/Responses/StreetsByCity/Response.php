<?php

namespace UsePack\IikoCloud\Entity\Responses\StreetsByCity;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    /**
     * Operation ID.
     */
    protected string $correlationId;

    /**
     * Delivery restrictions.
     *
     * @var Street[]
     */
    protected array $streets = [];

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->streets = Street::collection($this->streets);
    }

    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }

    /**
     * @return Street[]
     */
    public function getStreets(): array
    {
        return $this->streets;
    }
}
