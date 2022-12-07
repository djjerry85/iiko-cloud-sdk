<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateDelivery;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;
use UsePack\IikoCloud\Entity\Requests\CreateOrder;

class Request extends BaseRequest
{
    protected string $organizationId;

    protected ?string $terminalGroupId = null;

    protected Order $order;

    protected ?CreateOrder\Settings $transportToFrontTimeout = null;

    public function __construct(string $organizationId, Order $order)
    {
        $this->organizationId = $organizationId;
        $this->order = $order;
    }

    public function setTransportToFrontTimeout(int $seconds): static
    {
        $this->transportToFrontTimeout = new CreateOrder\Settings();
        $this->transportToFrontTimeout->setTransportToFrontTimeout($seconds);

        return $this;
    }

    public function setOrganizationId(string $organizationId): void
    {
        $this->organizationId = $organizationId;
    }

    public function setTerminalGroupId(string $terminalGroupId): void
    {
        $this->terminalGroupId = $terminalGroupId;
    }

    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }
}
