<?php

namespace UsePack\IikoCloud\Entity\Responses;

class ProductCategory extends BaseResponse
{
    protected string $id;

    protected string $name;

    protected bool $isDeleted;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }
}
