<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class PaymentAdditionalData extends BaseRequest
{
    public const TYPE_IIKO_CARD = 'IikoCard';

    public const SEARCH_SCOPE_RESERVED = 'Reserved';
    public const SEARCH_SCOPE_PHONE = 'Phone';
    public const SEARCH_SCOPE_CARD_NUMBER = 'CardNumber';
    public const SEARCH_SCOPE_CARD_TRACK = 'CardTrack';
    public const SEARCH_SCOPE_PAYMENT_TOKEN = 'PaymentToken';
    public const SEARCH_SCOPE_FIND_FACE_ID = 'FindFaceId';

    /**
     * Guest credential, authorizing payment.
     */
    protected string $credential;

    /**
     * Guest credential search scope.
     *
     * - Enum: "Reserved" "Phone" "CardNumber" "CardTrack" "PaymentToken" "FindFaceId"
     */
    protected string $searchScope;

    protected string $type = self::TYPE_IIKO_CARD;

    public function __construct(string $credential, string $searchScope, string $type)
    {
        $this->credential = $credential;
        $this->searchScope = $searchScope;
        $this->type = $type;
    }
}
