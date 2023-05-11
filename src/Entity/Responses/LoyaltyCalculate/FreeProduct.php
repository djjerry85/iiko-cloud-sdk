<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class FreeProduct extends BaseResponse
{
    /**
     * Id of product.
     */
    protected ?string $id = null;

    /**
     * Code of product. Can be null.
     */
    protected ?string $code = null;

    /**
     * Sizes available for that product.
     *
     * @var string[]
     */
    protected array $size = [];

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string[]
     */
    public function getSize(): array
    {
        return $this->size;
    }

    /**
     * @param string[] $size
     */
    public function setSize(array $size): void
    {
        $this->size = $size;
    }
}
