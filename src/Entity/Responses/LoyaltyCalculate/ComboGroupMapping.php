<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class ComboGroupMapping extends BaseResponse
{
    /**
     * Id of combo group.
     */
    protected string $groupId;

    /**
     * Id of item, suitable for group.
     */
    protected ?string $itemId = null;

    public function getGroupId(): string
    {
        return $this->groupId;
    }

    public function setGroupId(string $groupId): void
    {
        $this->groupId = $groupId;
    }

    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    public function setItemId(?string $itemId): void
    {
        $this->itemId = $itemId;
    }
}
