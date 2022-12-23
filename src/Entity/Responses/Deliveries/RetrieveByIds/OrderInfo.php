<?php

namespace UsePack\IikoCloud\Entity\Responses\Deliveries\RetrieveByIds;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;
use UsePack\IikoCloud\Entity\Responses\Deliveries\ErrorInfo;
use UsePack\IikoCloud\Entity\Responses\Deliveries\Order;

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
     * Order external number.
     */
    protected ?string $externalNumber = null;

    /**
     * Organization ID.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected string $organizationId;

    /**
     * Timestamp of most recent order change that took place on iikoTransport server.
     */
    protected int $timestamp;

    /**
     * Order creation status. In case of asynchronous creation, it allows to track the instance an order was validated/created in iikoFront.
     *
     * - Enum: "Success" "InProgress" "Error"
     */
    protected string $creationStatus;

    /**
     * Order creation details.
     *
     * - Required only if "creationStatus"="Error".
     */
    protected mixed $errorInfo = null;

    /**
     * Order creation details.
     *
     * - Field is filled up if "creationStatus"="Success".
     */
    protected mixed $order = null;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        if (!is_null($this->errorInfo)) {
            $this->errorInfo = ErrorInfo::create($this->errorInfo);
        }

        if (!is_null($this->order)) {
            $this->order = Order::create($this->order);
        }
    }

    public function getId(): string
    {
        return $this->id;
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

    public function getCreationStatus(): string
    {
        return $this->creationStatus;
    }

    public function getErrorInfo(): ?ErrorInfo
    {
        return $this->errorInfo;
    }

    public function getOrder(): ?Order
    {
        return $this->order;
    }
}
