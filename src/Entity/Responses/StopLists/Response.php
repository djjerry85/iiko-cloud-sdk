<?php

namespace UsePack\IikoCloud\Entity\Responses\StopLists;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    /**
     * Operation ID.
     */
    protected string $correlationId;

    /**
     * Set of out-of-stock lists.
     *
     * @var OrganizationStopList[]
     */
    protected array $terminalGroupStopLists = [];

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->terminalGroupStopLists = OrganizationStopList::collection($this->terminalGroupStopLists);
    }

    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }

    /**
     * @return OrganizationStopList[]
     */
    public function getOrganizationStopLists(): array
    {
        return $this->terminalGroupStopLists;
    }
}
