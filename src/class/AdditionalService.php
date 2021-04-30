<?php

namespace CarSharing;

abstract class AdditionalService implements Service
{
    protected $costService = 0;

    public function applyService()
    {
        return $this->costService;
    }
}
