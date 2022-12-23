<?php

namespace UsePack\IikoCloud\Entity\Responses\Deliveries;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Order extends BaseResponse
{
    public const STATUS_UNCONFIRMED = 'Unconfirmed';
    public const STATUS_WAIT_COOKING = 'WaitCooking';
    public const STATUS_READY_FOR_COOKING = 'ReadyForCooking';
    public const STATUS_COOKING_STARTED = 'CookingStarted';
    public const STATUS_COOKING_COMPLETED = 'CookingCompleted';
    public const STATUS_WAITING = 'Waiting';
    public const STATUS_ON_WAY = 'OnWay';
    public const STATUS_DELIVERED = 'Delivered';
    public const STATUS_CLOSED = 'Closed';
    public const STATUS_CANCELLED = 'Cancelled';

    /**
     * ID of delivery serving as source for splitting by FCRs.
     */
    protected ?string $parentDeliveryId = null;

    /**
     * Delivery customer.
     */
    protected mixed $customer = null;

    /**
     * Delivery phone number.
     */
    protected string $phone;

    /**
     * Delivery point details. Not required if order type is customer pickup. Otherwise, required.
     */
    protected mixed $deliveryPoint = null;

    /**
     * Delivery status.
     */
    protected string $status;

    /**
     * Delivery cancellation details. Required only if delivery is canceled, i.e. status=Canceled.
     */
    protected mixed $cancelInfo = null;

    /**
     * Driver information.
     */
    protected mixed $courierInfo = null;

    /**
     * Order fulfillment time (Local for the terminal).
     */
    protected string $completeBefore;

    /**
     * Delivery creation time in iikoFront (Local for the terminal).
     */
    protected string $whenCreated;

    /**
     * Delivery confirmation time (Local for the terminal).
     */
    protected ?string $whenConfirmed = null;

    /**
     * Service printing time (Local for the terminal).
     */
    protected ?string $whenPrinted = null;

    /**
     * Cooking completion time (Local for the terminal).
     */
    protected ?string $whenCookingCompleted = null;

    /**
     * Delivery dispatch time (Local for the terminal).
     */
    protected ?string $whenSended = null;

    /**
     * Actual delivery time (Local for delivery terminal).
     */
    protected ?string $whenDelivered = null;

    /**
     * Order comment.
     */
    protected ?string $comment = null;

    /**
     * Problem flag.
     */
    protected mixed $problem = null;

    /**
     * Operator that took order.
     */
    protected mixed $operator = null;

    /**
     * Marketing source.
     */
    protected mixed $marketingSource = null;

    /**
     * Duration of delivery (in minutes).
     */
    protected ?int $deliveryDuration = null;

    /**
     * Ordinal number in route list. Field is filled up at the time of delivery allocation by logistics in iikoFront. If logistics is not in use, the field is not filled up.
     */
    protected ?int $indexInCourierRoute = null;

    /**
     * The time when you need to start cooking an order (Local for the terminal).
     */
    protected string $cookingStartTime;

    /**
     * The time when you need to start cooking an order (Local for the terminal).
     */
    protected bool $isDeleted;

    /**
     * Moment of time when CloudAPI received the request to create the order (UTC).
     */
    protected ?string $whenReceivedByApi = null;

    /**
     * Moment of time when the order first received and saved from iikoFront (UTC).
     */
    protected ?string $whenReceivedFromFront = null;

    /**
     * Tells that this delivery has been moved from terminal group with id "movedFromTerminalGroupId" by cancelling delivery with deliveryId "movedFromDeliveryId".
     */
    protected ?string $movedFromDeliveryId = null;

    /**
     * Tells that this delivery has been moved from terminal group with id "movedFromTerminalGroupId" by cancelling delivery with deliveryId "movedFromDeliveryId".
     */
    protected ?string $movedFromTerminalGroupId = null;

    /**
     * Tells that this delivery has been moved from terminal group with id "movedFromTerminalGroupId" by cancelling delivery with deliveryId "movedFromDeliveryId".
     */
    protected ?string $movedFromOrganizationId = null;

    /**
     * ECS info.
     */
    protected mixed $externalCourierService = null;

    /**
     * Tells that this delivery has been canceled and moved to terminal group with id iikoTransport.PublicApi.Contracts.Deliveries.Response.Order.Order.MovedToTerminalGroupId.
     */
    protected ?string $movedToDeliveryId = null;

    protected ?string $movedToTerminalGroupId = null;

    protected ?string $movedToOrganizationId = null;

    /**
     * Order amount (after discount or surcharge).
     */
    protected float $sum;

    /**
     * Delivery No.
     */
    protected int $number;

    /**
     * Delivery source.
     */
    protected ?string $sourceKey = null;

    /**
     * Invoice printing time (guest bill time).
     */
    protected ?string $whenBillPrinted = null;

    /**
     * Delivery closing time (Local for delivery terminal).
     */
    protected ?string $whenClosed = null;

    /**
     * Concept.
     */
    protected mixed $conception = null;

    /**
     * Information about order guests.
     */
    protected mixed $guestsInfo = null;

    /**
     * Order items.
     */
    protected array $items;

    /**
     * Combo.
     */
    protected ?array $combos = null;

    /**
     * Payments.
     */
    protected ?array $payments = null;

    /**
     * Tips.
     */
    protected ?array $tips = null;

    /**
     * Discounts.
     */
    protected ?array $discounts = null;

    /**
     * Order type.
     */
    protected mixed $orderType = null;

    /**
     * ID of the terminal group where the order is located.
     */
    protected string $terminalGroupId;

    /**
     * The amount of processed payments. null - only for unsupported iikoFront versions.
     */
    protected ?float $processedPaymentsSum = null;

    public function getParentDeliveryId(): ?string
    {
        return $this->parentDeliveryId;
    }

    public function getCustomer(): mixed
    {
        return $this->customer;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getDeliveryPoint(): mixed
    {
        return $this->deliveryPoint;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getCancelInfo(): mixed
    {
        return $this->cancelInfo;
    }

    public function getCourierInfo(): mixed
    {
        return $this->courierInfo;
    }

    public function getCompleteBefore(): string
    {
        return $this->completeBefore;
    }

    public function getWhenCreated(): string
    {
        return $this->whenCreated;
    }

    public function getWhenConfirmed(): ?string
    {
        return $this->whenConfirmed;
    }

    public function getWhenPrinted(): ?string
    {
        return $this->whenPrinted;
    }

    public function getWhenCookingCompleted(): ?string
    {
        return $this->whenCookingCompleted;
    }

    public function getWhenSended(): ?string
    {
        return $this->whenSended;
    }

    public function getWhenDelivered(): ?string
    {
        return $this->whenDelivered;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function getProblem(): mixed
    {
        return $this->problem;
    }

    public function getOperator(): mixed
    {
        return $this->operator;
    }

    public function getMarketingSource(): mixed
    {
        return $this->marketingSource;
    }

    public function getDeliveryDuration(): ?int
    {
        return $this->deliveryDuration;
    }

    public function getIndexInCourierRoute(): ?int
    {
        return $this->indexInCourierRoute;
    }

    public function getCookingStartTime(): string
    {
        return $this->cookingStartTime;
    }

    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    public function getWhenReceivedByApi(): ?string
    {
        return $this->whenReceivedByApi;
    }

    public function getWhenReceivedFromFront(): ?string
    {
        return $this->whenReceivedFromFront;
    }

    public function getMovedFromDeliveryId(): ?string
    {
        return $this->movedFromDeliveryId;
    }

    public function getMovedFromTerminalGroupId(): ?string
    {
        return $this->movedFromTerminalGroupId;
    }

    public function getMovedFromOrganizationId(): ?string
    {
        return $this->movedFromOrganizationId;
    }

    public function getExternalCourierService(): mixed
    {
        return $this->externalCourierService;
    }

    public function getMovedToDeliveryId(): ?string
    {
        return $this->movedToDeliveryId;
    }

    public function getMovedToTerminalGroupId(): ?string
    {
        return $this->movedToTerminalGroupId;
    }

    public function getMovedToOrganizationId(): ?string
    {
        return $this->movedToOrganizationId;
    }

    public function getSum(): float
    {
        return $this->sum;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getSourceKey(): ?string
    {
        return $this->sourceKey;
    }

    public function getWhenBillPrinted(): ?string
    {
        return $this->whenBillPrinted;
    }

    public function getWhenClosed(): ?string
    {
        return $this->whenClosed;
    }

    public function getConception(): mixed
    {
        return $this->conception;
    }

    public function getGuestsInfo(): mixed
    {
        return $this->guestsInfo;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getCombos(): ?array
    {
        return $this->combos;
    }

    public function getPayments(): ?array
    {
        return $this->payments;
    }

    public function getTips(): ?array
    {
        return $this->tips;
    }

    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    public function getOrderType(): mixed
    {
        return $this->orderType;
    }

    public function getTerminalGroupId(): string
    {
        return $this->terminalGroupId;
    }

    public function getProcessedPaymentsSum(): ?float
    {
        return $this->processedPaymentsSum;
    }
}
