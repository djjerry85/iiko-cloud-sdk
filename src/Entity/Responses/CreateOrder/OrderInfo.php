<?php

namespace UsePack\IikoCloud\Entity\Responses\CreateOrder;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class OrderInfo extends BaseResponse
{
    public const CREATION_STATUS_SUCCESS = 'Success';
    public const CREATION_STATUS_IN_PROGRESS = 'InProgress';
    public const CREATION_STATUS_ERROR = 'Error';

    /**
     * Order ID.
     */
    protected string $id;

    /**
     * POS order ID.
     */
    protected ?string $posId;

    /**
     * Order external number.
     */
    protected ?string $externalNumber;

    /**
     * Organization ID.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected string $organizationId;

    /**
     * Timestamp of most recent order change that took place on iikoTransport server.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected int $timestamp;

    /**
     * Order creation status. In case of asynchronous creation, it allows to track the instance an order was validated/created in iikoFront.
     *
     * - Enum: "Success" "InProgress" "Error"
     */
    protected int $creationStatus;

    /**
     * Order creation details.
     *
     * - Required only if "creationStatus"="Error".
     */
    protected ?ErrorInfo $errorInfo;

    /**
     * Order creation details.
     *
     * - Field is filled up if "creationStatus"="Success".
     */
    protected mixed $order;

    public function getId(): string
    {
        return $this->id;
    }

    public function getPosId(): ?string
    {
        return $this->posId;
    }

    public function getExternalNumber(): ?string
    {
        return $this->externalNumber;
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    public function getCreationStatus(): int
    {
        return $this->creationStatus;
    }

    public function getErrorInfo(): ?ErrorInfo
    {
        return $this->errorInfo;
    }

    public function getOrder(): mixed
    {
        return $this->order;
    }
}
