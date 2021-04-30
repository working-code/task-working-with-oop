<?php

namespace CarSharing;

class ServiceGps extends AdditionalService
{
    use Gps;
    use RoundingMinute;

    public function __construct($countMinute, $priceHour, $unitRounding = 60)
    {
        $this->costService = $this->calculateCostService($countMinute, $priceHour, $unitRounding);
        return $this->costService;
    }
}
