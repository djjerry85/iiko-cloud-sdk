<?php

namespace UsePack\IikoCloud\Entity\Responses;

class TerminalGroup extends BaseResponse
{
    /**
     * Delivery group ID.
     *
     * - Can be obtained by /api/1/terminal_groups operation.
     */
    protected string $id;

    /**
     * Organization ID to which delivery group belongs.
     *
     * - Can be obtained by /api/1/organizations operation.
     */
    protected string $organizationId;

    /**
     * Terminal group name.
     */
    protected string $name;

    /**
     * Terminal group time zone.
     */
    protected string $timeZone;
}
