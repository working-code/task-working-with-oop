<?php

namespace CarSharing\Tariff;

interface Cost
{
    public function getPrice();

    public function addService(\CarSharing\Service\Service $service);
}
