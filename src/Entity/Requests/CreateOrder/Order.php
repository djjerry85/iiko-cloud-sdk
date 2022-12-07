<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

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
     * Table IDs.
     *
     * - Can be obtained by /api/1/reserve/available_restaurant_sections operation.
     *
     * @var string[]|null
     */
    protected ?array $tableIds = null;

    /**
     * Guest.
     */
    protected Customer\RegularCustomer|Customer\OneTimeCustomer|null $customer = null;

    /**
     * Guest phone.
     */
    protected ?string $phone = null;

    /**
     * Guest.
     */
    protected ?OrderGuests $guests = null;

    /**
     * Tab name (only for fast-food terminals group in tab mode).
     */
    protected ?string $tabName = null;

    /**
     * Order items.
     *
     * @var OrderItem\ProductOrderItem[]
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
     * @var Payment\Payment[]|null
     */
    protected ?array $payments = null;

    /**
     * Order tips components.
     *
     * @var TipsPayment\TipsPayment[]|null
     */
    protected ?array $tips = null;

    /**
     * The string key (marker) of the source (partner - api user) that created the order. Needed to limit the visibility of orders for external integration.
     */
    protected ?string $sourceKey = null;

    /**
     * Discounts/surcharges.
     */
    protected ?DiscountsInfo\DiscountsInfo $discountsInfo = null;

    /**
     * Information about Loyalty app.
     */
    protected ?IikoCard5Info $iikoCard5Info = null;

    /**
     * Order type ID.
     *
     * - Can be obtained by /api/1/deliveries/order_types operation
     */
    protected ?string $orderTypeId = null;

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setExternalNumber(?string $externalNumber): void
    {
        $this->externalNumber = $externalNumber;
    }

    /**
     * @param string[]|null $tableIds
     */
    public function setTableIds(?array $tableIds): void
    {
        $this->tableIds = $tableIds;
    }

    public function setCustomer(Customer\RegularCustomer|Customer\OneTimeCustomer|null $customer): void
    {
        $this->customer = $customer;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function setGuests(?OrderGuests $guests): void
    {
        $this->guests = $guests;
    }

    public function setTabName(?string $tabName): void
    {
        $this->tabName = $tabName;
    }

    /**
     * @param OrderItem\ProductOrderItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function addItem(OrderItem\ProductOrderItem $item): void
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
     * @param Payment\Payment[]|null $payments
     */
    public function setPayments(?array $payments): void
    {
        $this->payments = $payments;
    }

    public function addPayment(Payment\Payment $payment): void
    {
        if (!is_array($this->payments)) {
            $this->payments = [];
        }

        $this->payments[] = $payment;
    }

    /**
     * @param TipsPayment\TipsPayment[]|null $tips
     */
    public function setTips(?array $tips): void
    {
        $this->tips = $tips;
    }

    public function addTip(TipsPayment\TipsPayment $tip): void
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

    public function setDiscountsInfo(?DiscountsInfo\DiscountsInfo $discountsInfo): void
    {
        $this->discountsInfo = $discountsInfo;
    }

    public function setIikoCard5Info(?IikoCard5Info $iikoCard5Info): void
    {
        $this->iikoCard5Info = $iikoCard5Info;
    }

    public function setOrderTypeId(?string $orderTypeId): void
    {
        $this->orderTypeId = $orderTypeId;
    }
}
