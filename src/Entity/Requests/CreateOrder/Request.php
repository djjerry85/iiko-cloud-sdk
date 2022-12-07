<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class Request extends BaseRequest
{
    protected string $organizationId;

    protected string $terminalGroupId;

    protected Order $order;

    protected ?Settings $transportToFrontTimeout = null;

    public function __construct(
        string $organizationId,
        string $terminalGroupId,
        Order $order,
    ) {
        $this->organizationId = $organizationId;
        $this->terminalGroupId = $terminalGroupId;
        $this->order = $order;
    }

    public function setTransportToFrontTimeout(int $seconds): static
    {
        $this->transportToFrontTimeout = new Settings();
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
