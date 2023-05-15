<?php

namespace UsePack\IikoCloud\Entity\Responses\CouponInfo;

use UsePack\IikoCloud\Entity\Responses\BaseResponse;

class Response extends BaseResponse
{
    protected array $couponInfo;

    public function __construct(?array $properties = null)
    {
        parent::__construct($properties);

        $this->couponInfo = CouponInfo::collection($this->couponInfo);
    }

    /**
     * @return CouponInfo[]
     */
    public function getCouponInfo(): array
    {
        return $this->couponInfo;
    }

    /**
     * @param CouponInfo[] $couponInfo
     */
    public function setCouponInfo(array $couponInfo): void
    {
        $this->couponInfo = $couponInfo;
    }
}
