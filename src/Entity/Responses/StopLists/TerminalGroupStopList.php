<?php

namespace UsePack\IikoCloud\Entity\Responses\StopLists;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class TerminalGroupStopList extends BaseResponse
{
    /**
     * Terminal ID.
     */
    protected string $terminalGroupId;

    /**
     * Items for organization.
     *
     * @var StopListItem[]
     */
    protected array $items;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->items = StopListItem::collection($this->items);
    }

    public function getTerminalGroupId(): string
    {
        return $this->terminalGroupId;
    }

    public function setTerminalGroupId(string $terminalGroupId): void
    {
        $this->terminalGroupId = $terminalGroupId;
    }

    /**
     * @return StopListItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param StopListItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}
