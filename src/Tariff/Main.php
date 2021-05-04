<?php

namespace CarSharing\Tariff;

use CarSharing\Service\Service;

abstract class Main implements Cost
{
    const PRICE_KM = 0;
    const PRICE_MINUTE = 0;

    protected $countKm;
    protected $countMinute;
    protected $services = [];

    public function addService(Service $service)
    {
        $this->services[] = $service;
    }

    public function setCountKm($countKm)
    {
        $this->countKm = $countKm;
    }

    public function setCountMinute($countMinute)
    {
        $this->countMinute = $countMinute;
    }

    protected function getPriceServices()
    {
        $priceServices = 0;
        foreach ($this->services as $value) {
            $priceServices += $value->getPrice($this->countMinute);
        }
        return  $priceServices;
    }
}
