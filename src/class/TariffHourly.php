<?php

namespace CarSharing;

class TariffHourly extends Tariff
{
    use RoundingMinute;

    public function __construct($priceKm = 0, $priceMinute = 200/60)
    {
        $this->priceKm = $priceKm;
        $this->priceMinute = $priceMinute;
        $this->roundingMinute = true;
    }
}
