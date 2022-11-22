<?php

namespace UsePack\IikoCloud\Entity\Responses;

class Group extends BaseResponse
{
    /**
     * Links to images.
     *
     * @var string[]
     */
    protected array $imageLinks;

    /**
     * Parent group.
     */
    protected ?string $parentGroup;

    /**
     * Group's order (priority) in menu.
     */
    protected int $order;

    /**
     * On-the-menu attribute.
     */
    protected bool $isIncludedInMenu;

    /**
     * Is group modifier attribute.
     *
     * - true - group modifier.
     * - false - external menu group.
     */
    protected bool $isGroupModifier;

    /**
     * ID.
     */
    protected string $id;

    /**
     * SKU.
     */
    protected ?string $code;

    /**
     * Name.
     */
    protected string $name;

    /**
     * Description.
     */
    protected ?string $description;

    /**
     * Additional information.
     */
    protected ?string $additionalInfo;

    /**
     * Tags.
     *
     * @var string[]|null
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

    public function getParentGroup(): ?string
    {
        return $this->parentGroup;
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

    /**
     * @return string[]
     */
    public function getImageLinks(): array
    {
        return $this->imageLinks;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function isIncludedInMenu(): bool
    {
        return $this->isIncludedInMenu;
    }

    public function isGroupModifier(): bool
    {
        return $this->isGroupModifier;
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
