<?php

namespace CarSharing;

trait Gps
{
    private function calculateCostService($countMinute, $priceHour, $unitRounding)
    {
        return ($this->roundingMinute($countMinute) /$unitRounding) * $priceHour;
    }
}
