<?php

namespace CarSharing;

class TariffBasic extends Tariff
{
    public function __construct($priceKm = 10, $priceMinute = 3)
    {
        $this->priceKm = $priceKm;
        $this->priceMinute = $priceMinute;
    }
}
