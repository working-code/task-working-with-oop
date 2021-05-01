<?php

namespace CarSharing\Service;

interface Service
{
    public function getPrice();

    public function setCountMinute($countMinute);
}
