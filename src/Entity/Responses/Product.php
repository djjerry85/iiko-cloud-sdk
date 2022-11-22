<?php

namespace UsePack\IikoCloud\Entity\Responses;

class Product extends BaseResponse
{
    public const TYPE_DISH = 'dish';
    public const TYPE_GOOD = 'good';
    public const TYPE_MODIFIER = 'modifier';

    public const ORDER_ITEM_TYPE_PRODUCT = 'Product';
    public const ORDER_ITEM_TYPE_COMPOUND = 'Compound';

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->sizePrices = ProductSizePrice::collection($this->sizePrices);
        $this->modifiers = ProductModifier::collection($this->modifiers);
        $this->groupModifiers = ProductModifiersGroup::collection($this->groupModifiers);
    }

    /**
     * ID.
     */
    protected string $id;

    /**
     * Fat per 100g.
     */
    protected ?float $fatAmount;

    /**
     * Protein per 100g.
     */
    protected ?float $proteinsAmount;

    /**
     * Carbohydrate per 100g.
     */
    protected ?float $carbohydratesAmount;

    /**
     * Calories per 100g.
     */
    protected ?float $energyAmount;

    /**
     * Fat per item.
     */
    protected ?float $fatFullAmount;

    /**
     * Protein per item.
     */
    protected ?float $proteinsFullAmount;

    /**
     * Carbohydrate per item.
     */
    protected ?float $carbohydratesFullAmount;

    /**
     * Calories per item.
     */
    protected ?float $energyFullAmount;

    /**
     * Item weight.
     */
    protected ?float $weight;

    /**
     * Stock list group in RMS.
     */
    protected ?string $groupId;

    /**
     * Product category in RMS.
     */
    protected ?string $productCategoryId;

    /**
     * dish | good | modifier.
     */
    protected ?string $type;

    /**
     * Enum: "Product" "Compound"
     * Product or compound. Depends on modifiers scheme existence.
     */
    protected string $orderItemType;

    /**
     * Modifier schema's ID.
     */
    protected ?string $modifierSchemaId;

    /**
     * Modifier schema's name.
     */
    protected ?string $modifierSchemaName;

    /**
     * Is product splittable.
     */
    protected bool $splittable;

    /**
     * Item's unit of measurement.
     */
    protected string $measureUnit;

    /**
     * Prices.
     *
     * @var ProductSizePrice[]
     */
    protected array $sizePrices;

    /**
     * Modifiers.
     *
     * @var ProductModifier[]
     */
    protected array $modifiers;

    /**
     * Modifier groups.
     *
     * @var ProductModifiersGroup[]
     */
    protected array $groupModifiers;

    /**
     * Links to images.
     *
     * @var string[]
     */
    protected array $imageLinks;

    /**
     * Do not print on bill.
     */
    protected bool $doNotPrintInCheque;

    /**
     * External menu group.
     */
    protected ?string $parentGroup;

    /**
     * Product's order (priority) in menu.
     */
    protected ?int $order;

    /**
     * Full name in a foreign language.
     */
    protected ?string $fullNameEnglish;

    /**
     * Weighed product.
     */
    protected bool $useBalanceForSell;

    /**
     * Open price.
     */
    protected bool $canSetOpenPrice;

    /**
     * SKU.
     */
    protected ?string $code;

    /**
     * Name.
     */
    protected string $name;

    /**
     * Additional information.
     */
    protected ?string $description;

    /**
     * Description.
     */
    protected ?string $additionalInfo;

    /**
     * Description.
     *
     * @var string[]
     */
    protected ?array $tags;

    /**
     * Is-Deleted attribute.
     */
    protected bool $isDeleted;

    /**
     * SEO description for client.
     */
    protected ?string $seoDescription;

    /**
     * SEO text for robots.
     */
    protected ?string $seoText;

    /**
     * SEO keywords.
     */
    protected ?string $seoKeywords;

    /**
     * SEO header.
     */
    protected ?string $seoTitle;

    public function getId(): string
    {
        return $this->id;
    }

    public function getFatAmount(): ?float
    {
        return $this->fatAmount;
    }

    public function getProteinsAmount(): ?float
    {
        return $this->proteinsAmount;
    }

    public function getCarbohydratesAmount(): ?float
    {
        return $this->carbohydratesAmount;
    }

    public function getEnergyAmount(): ?float
    {
        return $this->energyAmount;
    }

    public function getFatFullAmount(): ?float
    {
        return $this->fatFullAmount;
    }

    public function getProteinsFullAmount(): ?float
    {
        return $this->proteinsFullAmount;
    }

    public function getCarbohydratesFullAmount(): ?float
    {
        return $this->carbohydratesFullAmount;
    }

    public function getEnergyFullAmount(): ?float
    {
        return $this->energyFullAmount;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    public function getProductCategoryId(): ?string
    {
        return $this->productCategoryId;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getOrderItemType(): string
    {
        return $this->orderItemType;
    }

    public function getModifierSchemaId(): ?string
    {
        return $this->modifierSchemaId;
    }

    public function getModifierSchemaName(): ?string
    {
        return $this->modifierSchemaName;
    }

    public function isSplittable(): bool
    {
        return $this->splittable;
    }

    public function getMeasureUnit(): string
    {
        return $this->measureUnit;
    }

    /**
     * @return ProductSizePrice[]
     */
    public function getSizePrices(): array
    {
        return $this->sizePrices;
    }

    /**
     * @return ProductModifier[]
     */
    public function getModifiers(): array
    {
        return $this->modifiers;
    }

    /**
     * @return ProductModifiersGroup[]
     */
    public function getGroupModifiers(): array
    {
        return $this->groupModifiers;
    }

    /**
     * @return string[]
     */
    public function getImageLinks(): array
    {
        return $this->imageLinks;
    }

    public function isDoNotPrintInCheque(): bool
    {
        return $this->doNotPrintInCheque;
    }

    public function getParentGroup(): ?string
    {
        return $this->parentGroup;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function getFullNameEnglish(): ?string
    {
        return $this->fullNameEnglish;
    }

    public function isUseBalanceForSell(): bool
    {
        return $this->useBalanceForSell;
    }

    public function isCanSetOpenPrice(): bool
    {
        return $this->canSetOpenPrice;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getAdditionalInfo(): ?string
    {
        return $this->additionalInfo;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    public function getSeoDescription(): ?string
    {
        return $this->seoDescription;
    }

    public function getSeoText(): ?string
    {
        return $this->seoText;
    }

    public function getSeoKeywords(): ?string
    {
        return $this->seoKeywords;
    }

    public function getSeoTitle(): ?string
    {
        return $this->seoTitle;
    }
}
