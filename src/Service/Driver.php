<?php

namespace CarSharing\Service;

class Driver implements Service
{
    use DriverTrait;

    const PRICE_MINUTE = 0;
    const PRICE_SERVICE = 100;

    protected $countMinute;

    public function setCountMinute($countMinute)
    {
        $this->countMinute = $countMinute;
    }
}
