<?php

namespace UsePack\IikoCloud\Entity\Responses;

class Menu extends BaseResponse
{
    /**
     * Stock list group.
     *
     * @var Group[]
     */
    protected array $groups;

    /**
     * Menu item category.
     *
     * @var ProductCategory[]
     */
    protected array $productCategories;

    /**
     * Menu items and modifiers.
     *
     * @var Product[]
     */
    protected array $products;

    /**
     * Item sizes.
     *
     * @var ProductSize[]
     */
    protected array $sizes;

    /**
     * Items list revision.
     */
    protected int $revision;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->groups = Group::collection($this->groups);
        $this->productCategories = ProductCategory::collection($this->productCategories);
        $this->products = Product::collection($this->products);
        $this->sizes = ProductSize::collection($this->sizes);
    }

    /**
     * @return Group[]
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @return ProductCategory[]
     */
    public function getProductCategories(): array
    {
        return $this->productCategories;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @return ProductSize[]
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function getRevision(): int
    {
        return $this->revision;
    }
}
