<?php

namespace CarSharing\Service;

class Gps implements Service
{
    use GpsTrait;

    const PRICE_MINUTE = 15 / 60;
    const MIN_COUNT_MINUTES = 60;

    private function roundingMinute($countMinute)
    {
        return ceil($countMinute / self::MIN_COUNT_MINUTES) * self::MIN_COUNT_MINUTES;
    }
}
