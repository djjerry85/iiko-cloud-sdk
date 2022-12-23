<?php

namespace UsePack\IikoCloud\Entity\Requests;

class RetrieveDeliveriesByIds extends BaseRequest
{
    /**
     * Organization ID for which an order search will be performed.
     * Can be obtained by /api/1/organizations operation.
     */
    protected string $organizationId;

    /**
     * IDs of orders information on which is required.
     *
     * @var string[]
     */
    protected array $orderIds;

    /**
     * Source keys.
     *
     * @var string[]
     */
    protected ?array $sourceKeys;

    /**
     * @param string[] $orderIds
     */
    public function __construct(string $organizationId, array $orderIds)
    {
        $this->organizationId = $organizationId;
        $this->orderIds = $orderIds;
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function setOrganizationId(string $organizationId): void
    {
        $this->organizationId = $organizationId;
    }

    /**
     * @return string[]
     */
    public function getOrderIds(): array
    {
        return $this->orderIds;
    }

    /**
     * @param string[] $orderIds
     */
    public function setOrderIds(array $orderIds): void
    {
        $this->orderIds = $orderIds;
    }

    /**
     * @return string[]|null
     */
    public function getSourceKeys(): ?array
    {
        return $this->sourceKeys;
    }

    /**
     * @param string[]|null $sourceKeys
     */
    public function setSourceKeys(?array $sourceKeys): void
    {
        $this->sourceKeys = $sourceKeys;
    }
}
