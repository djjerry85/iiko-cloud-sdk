<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\OrderItem;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class ComboInformation extends BaseRequest
{
    /**
     * Created combo ID.
     */
    protected string $comboId;

    /**
     * Action ID that defines combo.
     */
    protected string $comboSourceId;

    /**
     * Combo group ID to which item belongs.
     */
    protected string $comboGroupId;

    public function __construct(string $comboId, string $comboSourceId, string $comboGroupId)
    {
        $this->comboId = $comboId;
        $this->comboSourceId = $comboSourceId;
        $this->comboGroupId = $comboGroupId;
    }
}
