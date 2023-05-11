<?php

namespace UsePack\IikoCloud\Entity\Responses\LoyaltyCalculate;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Upsale extends BaseResponse
{
    /**
     * Id of action that caused the suggestion.
     */
    protected string $sourceActionId;

    /**
     * Suggestion text.
     */
    protected string $suggestionText;

    /**
     * Codes of products that suggested to be added to order.
     *
     * @var string[]
     */
    protected array $productCodes;

    public function getSourceActionId(): string
    {
        return $this->sourceActionId;
    }

    public function setSourceActionId(string $sourceActionId): void
    {
        $this->sourceActionId = $sourceActionId;
    }

    public function getSuggestionText(): string
    {
        return $this->suggestionText;
    }

    public function setSuggestionText(string $suggestionText): void
    {
        $this->suggestionText = $suggestionText;
    }

    /**
     * @return string[]
     */
    public function getProductCodes(): array
    {
        return $this->productCodes;
    }

    /**
     * @param string[] $productCodes
     */
    public function setProductCodes(array $productCodes): void
    {
        $this->productCodes = $productCodes;
    }
}
