<?php

namespace CarSharing\Tariff;

class Hourly extends Main
{
    const PRICE_KM = 0;
    const PRICE_MINUTE = 200 / 60;
    const MIN_COUNT_MINUTES = 60;

    public function getPrice()
    {
        return self::PRICE_MINUTE * $this->roundingMinute($this->countMinute) + $this->getPriceServices();
    }

    private function roundingMinute($countMinute)
    {
        return ceil($countMinute / self::MIN_COUNT_MINUTES) * self::MIN_COUNT_MINUTES;
    }
}
