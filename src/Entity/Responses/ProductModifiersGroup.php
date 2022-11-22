<?php

namespace UsePack\IikoCloud\Entity\Responses;

class ProductModifiersGroup extends ProductModifier
{
    /**
     * Presence of max/min quantity limitations of child modifiers.
     */
    protected ?bool $childModifiersHaveMinMaxRestrictions;

    /**
     * List of child modifiers.
     *
     * @var ProductModifier[]
     */
    protected array $childModifiers;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->childModifiers = ProductModifier::collection($this->childModifiers);
    }

    public function getChildModifiersHaveMinMaxRestrictions(): ?bool
    {
        return $this->childModifiersHaveMinMaxRestrictions;
    }

    /**
     * @return ProductModifier[]
     */
    public function getChildModifiers(): array
    {
        return $this->childModifiers;
    }
}
