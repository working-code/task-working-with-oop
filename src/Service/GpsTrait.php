<?php

namespace CarSharing\Service;

trait GpsTrait
{
    public function getPrice()
    {
        return $this->roundingMinute($this->countMinute) * self::PRICE_MINUTE;
    }
}
