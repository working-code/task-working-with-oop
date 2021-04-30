<?php

namespace CarSharing;

class TariffStudent extends Tariff
{
    public function __construct($priceKm = 4, $priceMinute = 1)
    {
        $this->priceKm = $priceKm;
        $this->priceMinute = $priceMinute;
    }
}
