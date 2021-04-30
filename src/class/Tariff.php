<?php

namespace CarSharing;

abstract class Tariff implements Cost
{
    use RoundingMinute;

    protected $priceKm;
    protected $priceMinute;
    protected $costServices = 0;
    protected $roundingMinute = null;
    protected $unitRoundingMinute = 60;

    public function calculationCost($countKm, $countMinute)
    {
        if ($this->roundingMinute) {
            $countMinute = $this->roundingMinute($countMinute);
        }
        return $this->priceKm * $countKm + $this->priceMinute * $countMinute + $this->costServices;
    }

    public function addService(Service $service)
    {
        $this->costServices += $service->applyService();
    }
}
