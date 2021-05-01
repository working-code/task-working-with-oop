<?php

namespace CarSharing\Service;

trait DriverTrait
{
    public function getPrice()
    {
        return self::PRICE_SERVICE + self::PRICE_MINUTE * $this->countMinute;
    }
}
