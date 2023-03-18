<?php

namespace UsePack\IikoCloud\Entity\Responses\StopLists;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class OrganizationStopList extends BaseResponse
{
    /**
     * Organization ID.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected string $organizationId;

    /**
     * Items for organization.
     *
     * @var TerminalGroupStopList[]
     */
    protected array $items;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->items = TerminalGroupStopList::collection($this->items);
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(string $organizationId): void
    {
        $this->organizationId = $organizationId;
    }

    /**
     * @return TerminalGroupStopList[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param TerminalGroupStopList[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}
