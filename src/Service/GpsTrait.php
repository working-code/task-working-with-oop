<?php

namespace CarSharing\Service;

trait GpsTrait
{
    public function getPrice($countMinute)
    {
        return $this->roundingMinute($countMinute) * self::PRICE_MINUTE;
    }
}
