<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateDelivery;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;
use UsePack\IikoCloud\Entity\Requests\CreateOrder\Customer;
use UsePack\IikoCloud\Entity\Requests\CreateOrder\DiscountsInfo\DiscountsInfo;
use UsePack\IikoCloud\Entity\Requests\CreateOrder\IikoCard5Info;
use UsePack\IikoCloud\Entity\Requests\CreateOrder\OrderCombo;
use UsePack\IikoCloud\Entity\Requests\CreateOrder\OrderItem\ProductOrderItem;
use UsePack\IikoCloud\Entity\Requests\CreateOrder\Payment\Payment;
use UsePack\IikoCloud\Entity\Requests\CreateOrder\TipsPayment\TipsPayment;

class Order extends BaseRequest
{
    /**
     * Order ID.
     */
    protected ?string $id = null;

    /**
     * Order external number.
     *
     * - [ 0 .. 50 ] characters
     */
    protected ?string $externalNumber = null;

    /**
     * Order fulfillment date.
     *
     * - yyyy-MM-dd HH:mm:ss.fff
     * - Date and time must be local for delivery terminal, without time zone (take a look at example). If null, order is urgent and time is calculated based on customer settings, i.e. the shortest delivery time possible. Permissible values: from current day and 30 days on.
     */
    protected ?string $completeBefore = null;

    /**
     * Telephone number.
     *
     * - [ 8 .. 40 ] characters
     * - Must begin with symbol "+" and must be at least 8 digits.
     */
    protected string $phone;

    /**
     * Order type ID.
     *
     * - Can be obtained by /api/1/deliveries/order_types operation
     * - One of the fields required: orderTypeId or orderServiceType.
     */
    protected ?string $orderTypeId = null;

    /**
     * Order service type.
     *
     * - Enum: "DeliveryByCourier" "DeliveryByClient"
     * - One of the fields required: orderTypeId or orderServiceType.
     */
    protected ?string $orderServiceType = null;

    /**
     * Delivery point details.
     *
     * - Not required in case of customer pickup. Otherwise, required.
     */
    protected ?DeliveryPoint\DeliveryPoint $deliveryPoint = null;

    /**
     * Order comment.
     */
    protected ?string $comment = null;

    /**
     * Customer.
     *
     * 'Regular' customer:
     * - can be used only if a customer agrees to take part in the store's loyalty programs
     * - customer details will be added (updated) to the store's customer database
     * - benefits (accumulation of rewards, etc.) of active loyalty programs will be made available to the customer
     *
     * 'One-time' customer:
     * - should be used if a customer does not agree to take part in the store's loyalty programs or an aggregator (external system) does not provide customer details
     * - customer details will NOT be added to the store's customer database and will be used ONLY to complete the current order
     */
    protected Customer\RegularCustomer|Customer\OneTimeCustomer|null $customer = null;

    /**
     * Guest details. Not equal to the customer who makes an order.
     */
    protected ?OrderGuests $guests = null;

    /**
     * Marketing source (advertisement) ID.
     *
     * - Can be obtained by /api/1/marketing_sources operation.
     */
    protected ?string $marketingSourceId = null;

    /**
     * Operator ID.
     */
    protected ?string $operatorId = null;

    /**
     * Order items.
     *
     * @var ProductOrderItem[]
     */
    protected array $items = [];

    /**
     * Combos included in order.
     *
     * @var OrderCombo[]|null
     */
    protected ?array $combos = null;

    /**
     * Order payment components.
     *
     * @var Payment[]|null
     */
    protected ?array $payments = null;

    /**
     * Order tips components.
     *
     * @var TipsPayment[]|null
     */
    protected ?array $tips = null;

    /**
     * The string key (marker) of the source (partner - api user) that created the order. Needed to limit the visibility of orders for external integration.
     */
    protected ?string $sourceKey = null;

    /**
     * Discounts/surcharges.
     */
    protected ?DiscountsInfo $discountsInfo = null;

    /**
     * Information about Loyalty app.
     */
    protected ?IikoCard5Info $iikoCard5Info = null;

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setExternalNumber(?string $externalNumber): void
    {
        $this->externalNumber = $externalNumber;
    }

    public function setCompleteBefore(?string $completeBefore): void
    {
        $this->completeBefore = $completeBefore;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setOrderTypeId(?string $orderTypeId): void
    {
        $this->orderTypeId = $orderTypeId;
    }

    public function setOrderServiceType(?string $orderServiceType): void
    {
        $this->orderServiceType = $orderServiceType;
    }

    public function setDeliveryPoint(?DeliveryPoint\DeliveryPoint $deliveryPoint): void
    {
        $this->deliveryPoint = $deliveryPoint;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    public function setCustomer(Customer\RegularCustomer|Customer\OneTimeCustomer|null $customer): void
    {
        $this->customer = $customer;
    }

    public function setGuests(?OrderGuests $guests): void
    {
        $this->guests = $guests;
    }

    public function setMarketingSourceId(?string $marketingSourceId): void
    {
        $this->marketingSourceId = $marketingSourceId;
    }

    public function setOperatorId(?string $operatorId): void
    {
        $this->operatorId = $operatorId;
    }

    /**
     * @param ProductOrderItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function addItem(ProductOrderItem $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @param OrderCombo[]|null $combos
     */
    public function setCombos(?array $combos): void
    {
        $this->combos = $combos;
    }

    public function addCombo(OrderCombo $combo): void
    {
        if (!is_array($this->combos)) {
            $this->combos = [];
        }

        $this->combos[] = $combo;
    }

    /**
     * @param Payment[]|null $payments
     */
    public function setPayments(?array $payments): void
    {
        $this->payments = $payments;
    }

    public function addPayment(Payment $payment): void
    {
        if (!is_array($this->payments)) {
            $this->payments = [];
        }

        $this->payments[] = $payment;
    }

    /**
     * @param TipsPayment[]|null $tips
     */
    public function setTips(?array $tips): void
    {
        $this->tips = $tips;
    }

    public function addTip(TipsPayment $tip): void
    {
        if (!is_array($this->tips)) {
            $this->tips = [];
        }

        $this->tips[] = $tip;
    }

    public function setSourceKey(?string $sourceKey): void
    {
        $this->sourceKey = $sourceKey;
    }

    public function setDiscountsInfo(?DiscountsInfo $discountsInfo): void
    {
        $this->discountsInfo = $discountsInfo;
    }

    public function setIikoCard5Info(?IikoCard5Info $iikoCard5Info): void
    {
        $this->iikoCard5Info = $iikoCard5Info;
    }
}
