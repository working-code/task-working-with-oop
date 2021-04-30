<?php

namespace CarSharing;

class ServiceDriver extends AdditionalService
{
    use Driver;

    public function __construct($price)
    {
        $this->costService = $this->calculateCostService($price);
        return $this->costService;
    }
}
