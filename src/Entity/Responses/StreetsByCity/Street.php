<?php

namespace UsePack\IikoCloud\Entity\Responses\StreetsByCity;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Street extends BaseResponse
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
     * External system revision No.
     */
    protected ?int $externalRevision = null;

    /**
     * ID in classifier, e.g., address database.
     */
    protected ?string $classifierId = null;

    /**
     * Is-Deleted attribute.
     */
    protected bool $isDeleted;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getExternalRevision(): ?int
    {
        return $this->externalRevision;
    }

    public function getClassifierId(): ?string
    {
        return $this->classifierId;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }
}
