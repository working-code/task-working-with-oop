<?php

namespace CarSharing\Tariff;

class Student extends Main
{
    const PRICE_KM = 4;
    const PRICE_MINUTE = 1;

    public function getPrice()
    {
        return self::PRICE_KM * $this->countKm + self::PRICE_MINUTE * $this->countMinute + $this->getPriceServices();
    }
}
