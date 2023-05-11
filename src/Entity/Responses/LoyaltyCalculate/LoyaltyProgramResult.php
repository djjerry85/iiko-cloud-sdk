<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class LoyaltyProgramResult extends BaseResponse
{
    /**
     * Program marketing campaign id.
     */
    protected string $marketingCampaignId;

    /**
     * Program name.
     */
    protected string $name;

    /**
     * Discount operations applied to order items.
     *
     * @var DiscountOperation[]
     */
    protected array $discounts = [];

    /**
     * Discount operations applied to order items.
     *
     * @var Upsale[]
     */
    protected array $upsales = [];

    /**
     * Program free products.
     *
     * @var FreeProductsGroup[]
     */
    protected array $freeProducts = [];

    /**
     * Ids of combo specification available in current order.
     *
     * @var string[]
     */
    protected array $availableComboSpecifications = [];

    /**
     * Partially added combos, available for assembly.
     *
     * @var AvailableCombo[]
     */
    protected array $availableCombo = [];

    /**
     * Certificate number is required for activation.
     */
    protected bool $needToActivateCertificate;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->discounts = DiscountOperation::collection($this->discounts);
        $this->upsales = Upsale::collection($this->upsales);
        $this->freeProducts = FreeProductsGroup::collection($this->freeProducts);
        $this->availableCombo = AvailableCombo::collection($this->availableCombo);
    }

    public function getMarketingCampaignId(): string
    {
        return $this->marketingCampaignId;
    }

    public function setMarketingCampaignId(string $marketingCampaignId): void
    {
        $this->marketingCampaignId = $marketingCampaignId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return DiscountOperation[]
     */
    public function getDiscounts(): array
    {
        return $this->discounts;
    }

    /**
     * @param DiscountOperation[] $discounts
     */
    public function setDiscounts(array $discounts): void
    {
        $this->discounts = $discounts;
    }

    /**
     * @return Upsale[]
     */
    public function getUpsales(): array
    {
        return $this->upsales;
    }

    /**
     * @param Upsale[] $upsales
     */
    public function setUpsales(array $upsales): void
    {
        $this->upsales = $upsales;
    }

    /**
     * @return FreeProductsGroup[]
     */
    public function getFreeProducts(): array
    {
        return $this->freeProducts;
    }

    /**
     * @param FreeProductsGroup[] $freeProducts
     */
    public function setFreeProducts(array $freeProducts): void
    {
        $this->freeProducts = $freeProducts;
    }

    /**
     * @return string[]
     */
    public function getAvailableComboSpecifications(): array
    {
        return $this->availableComboSpecifications;
    }

    /**
     * @param string[] $availableComboSpecifications
     */
    public function setAvailableComboSpecifications(array $availableComboSpecifications): void
    {
        $this->availableComboSpecifications = $availableComboSpecifications;
    }

    /**
     * @return AvailableCombo[]
     */
    public function getAvailableCombo(): array
    {
        return $this->availableCombo;
    }

    /**
     * @param AvailableCombo[] $availableCombo
     */
    public function setAvailableCombo(array $availableCombo): void
    {
        $this->availableCombo = $availableCombo;
    }

    public function isNeedToActivateCertificate(): bool
    {
        return $this->needToActivateCertificate;
    }

    public function setNeedToActivateCertificate(bool $needToActivateCertificate): void
    {
        $this->needToActivateCertificate = $needToActivateCertificate;
    }
}
