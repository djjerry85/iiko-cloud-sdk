<?php

namespace UsePack\IikoCloud\Entity\Responses;

class ProductSize extends BaseResponse
{
    /**
     * ID.
     */
    protected string $id;

    /**
     * Name.
     */
    protected string $name;

    /**
     * Priority (serial number) of the size in the size scale.
     */
    protected ?int $priority;

    /**
     * Is the default size in the size scale.
     */
    protected ?bool $isDefault;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
}
