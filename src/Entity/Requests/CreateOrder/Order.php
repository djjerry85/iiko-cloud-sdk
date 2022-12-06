<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class Order extends BaseRequest
{
    /**
     * Order ID.
     */
    protected ?string $id;

    /**
     * Order external number.
     *
     * - [ 0 .. 50 ] characters
     */
    protected ?string $externalNumber;

    /**
     * Table IDs.
     *
     * - Can be obtained by /api/1/reserve/available_restaurant_sections operation.
     *
     * @var string[]|null
     */
    protected ?array $tableIds;

    /**
     * Guest.
     */
    protected RegularCustomer|OneTimeCustomer|null $customer;

    /**
     * Guest phone.
     */
    protected ?string $phone;

    /**
     * Guest.
     */
    protected ?OrderGuests $guests;

    /**
     * Tab name (only for fast-food terminals group in tab mode).
     */
    protected ?string $tabName;

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
    protected ?array $combos;

    /**
     * Order payment components.
     *
     * @var Payment[]|null
     */
    protected ?array $payments;

    /**
     * Order tips components.
     *
     * @var TipsPayment[]|null
     */
    protected ?array $tips;

    /**
     * The string key (marker) of the source (partner - api user) that created the order. Needed to limit the visibility of orders for external integration.
     */
    protected ?string $sourceKey;

    /**
     * Discounts/surcharges.
     */
    protected ?DiscountsInfo $discountsInfo;

    /**
     * Information about Loyalty app.
     */
    protected ?IikoCard5Info $iikoCard5Info;

    /**
     * Order type ID.
     *
     * - Can be obtained by /api/1/deliveries/order_types operation
     */
    protected ?string $orderTypeId;

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

    public function setCustomer(RegularCustomer|OneTimeCustomer|null $customer): void
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

    public function setOrderTypeId(?string $orderTypeId): void
    {
        $this->orderTypeId = $orderTypeId;
    }
}
