<?php

namespace CarSharing;

interface Cost
{
    public function calculationCost($countKm, $countMinute);
    public function addService(Service $service);
}
