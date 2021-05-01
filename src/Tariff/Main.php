<?php

namespace CarSharing\Tariff;

abstract class Main implements Cost
{
    const PRICE_KM = 0;
    const PRICE_MINUTE = 0;

    protected $countKm;
    protected $countMinute;
    protected $services = [];

    public function addService(\CarSharing\Service\Service $service)
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
            $value->setCountMinute($this->countMinute);
            $priceServices += $value->getPrice();
        }
        return  $priceServices;
    }
}
