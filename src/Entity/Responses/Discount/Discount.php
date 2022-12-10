<?php

namespace UsePack\IikoCloud\Entity\Responses\Discount;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Discount extends BaseResponse
{
    public const MODE_PERCENT = 'Percent';
    public const MODE_FLEXIBLE_SUM = 'FlexibleSum';
    public const MODE_FIXED_SUM = 'FixedSum';

    /**
     * Discount ID in RMS.
     */
    protected string $id;

    /**
     * Discount name.
     */
    protected string $name;

    /**
     * Total discount rate.
     *
     * - Ignored if "isCategorisedDiscount" specified.
     */
    protected float $percent;

    /**
     * Whether it is category discount or not.
     *
     * - If true, "productCategoryDiscounts" discounts will apply.
     */
    protected bool $isCategorisedDiscount;

    /**
     * Category discount.
     *
     * @var DiscountCategory[]
     */
    protected array $productCategoryDiscounts = [];

    /**
     * Comment.
     */
    protected ?string $comment = null;

    /**
     * Whether discount allows for selected application to individual items at user's discretion.
     */
    protected bool $canBeAppliedSelectively;

    /**
     * Minimum order amount required for discount application. If order amount is less than specified threshold, discount does not apply.
     */
    protected ?float $minOrderSum = null;

    /**
     * Discount type.
     *
     * - Enum: "Percent" "FlexibleSum" "FixedSum"
     */
    protected string $mode;

    /**
     * Fixed amount.
     *
     * - Triggers if fixed amount has been specified.
     */
    protected float $sum;

    /**
     * Can be applied by card No.
     *
     * - If true, it's enough to enter discount card No. (card swiping not required)
     */
    protected bool $canApplyByCardNumber;

    /**
     * Created manually.
     */
    protected bool $isManual;

    /**
     * Executed by card.
     */
    protected bool $isCard;

    /**
     * Created automatically.
     */
    protected bool $isAutomatic;

    /**
     * IsDeleted.
     */
    protected bool $isDeleted;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->productCategoryDiscounts = DiscountCategory::collection($this->productCategoryDiscounts);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPercent(): float
    {
        return $this->percent;
    }

    public function isCategorisedDiscount(): bool
    {
        return $this->isCategorisedDiscount;
    }

    /**
     * @return DiscountCategory[]
     */
    public function getProductCategoryDiscounts(): array
    {
        return $this->productCategoryDiscounts;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function isCanBeAppliedSelectively(): bool
    {
        return $this->canBeAppliedSelectively;
    }

    public function getMinOrderSum(): ?float
    {
        return $this->minOrderSum;
    }

    public function getMode(): string
    {
        return $this->mode;
    }

    public function getSum(): float
    {
        return $this->sum;
    }

    public function isCanApplyByCardNumber(): bool
    {
        return $this->canApplyByCardNumber;
    }

    public function isManual(): bool
    {
        return $this->isManual;
    }

    public function isCard(): bool
    {
        return $this->isCard;
    }

    public function isAutomatic(): bool
    {
        return $this->isAutomatic;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }
}
