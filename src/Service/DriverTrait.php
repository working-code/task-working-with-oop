<?php

namespace CarSharing\Service;

trait DriverTrait
{
    public function getPrice($countMinute)
    {
        return self::PRICE_SERVICE + self::PRICE_MINUTE;
    }
}
