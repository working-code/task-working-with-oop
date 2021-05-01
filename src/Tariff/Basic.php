<?php

namespace CarSharing\Tariff;

class Basic extends Main
{
    const PRICE_KM = 10;
    const PRICE_MINUTE = 3;

    public function getPrice()
    {
        return self::PRICE_KM * $this->countKm + self::PRICE_MINUTE * $this->countMinute + $this->getPriceServices();
    }
}
