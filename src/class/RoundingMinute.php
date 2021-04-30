<?php

namespace CarSharing;

trait RoundingMinute
{
    private function roundingMinute($countMinute, $unitRounding = 60)
    {
        return ceil($countMinute / $unitRounding) * $unitRounding;
    }
}
