<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder\DiscountsInfo;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class DiscountRMS extends BaseRequest
{
    protected string $type = 'RMS';

    /**
     * Discount type.
     *
     * - Can be obtained by /api/1/discounts operation.
     */
    protected string $discountTypeId;

    /**
     * Discount/surcharge sum.
     */
    protected ?float $sum;

    /**
     * Discount information for order items.
     *
     * @var string[]|null
     */
    protected ?array $selectivePositions;

    public function __construct(string $discountTypeId, float $sum)
    {
        $this->discountTypeId = $discountTypeId;
    }

    public function setDiscountTypeId(string $discountTypeId): void
    {
        $this->discountTypeId = $discountTypeId;
    }

    public function setSum(?float $sum): void
    {
        $this->sum = $sum;
    }

    /**
     * @param string[]|null $selectivePositions
     */
    public function setSelectivePositions(?array $selectivePositions): void
    {
        $this->selectivePositions = $selectivePositions;
    }

    public function addSelectivePosition(string $position): void
    {
        if (!is_array($this->selectivePositions)) {
            $this->selectivePositions = [];
        }

        $this->selectivePositions[] = $position;
    }
}
