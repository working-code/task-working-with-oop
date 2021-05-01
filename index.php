<?php

namespace CarSharing;

namespace CarSharing\Tariff;

use CarSharing\Service\Driver;
use CarSharing\Service\Gps;

require_once "src/Service/Service.php";
require_once "src/Service/DriverTrait.php";
require_once "src/Service/Driver.php";
require_once "src/Service/GpsTrait.php";
require_once "src/Service/Gps.php";
require_once "src/Tariff/Cost.php";
require_once "src/Tariff/Main.php";
require_once "src/Tariff/Basic.php";
require_once "src/Tariff/Hourly.php";
require_once "src/Tariff/Student.php";


$gps = new Gps();
$driver = new Driver();

$tariffBasic = new Basic();
$tariffBasic->addService($gps);
$tariffBasic->addService($driver);
$tariffBasic->setCountKm(5);
$tariffBasic->setCountMinute(61);
$costTariffBasic = $tariffBasic->getPrice();
echo "Тариф базовый + gps + водитель 5км 61 минут итого = $costTariffBasic <br />";


$tariffHourly = new Hourly();
$tariffHourly->addService($driver);
$tariffHourly->setCountMinute(61);
$tariffHourly->setCountKm(5);
$costTariffHourly = $tariffHourly->getPrice();
echo "Тариф почасовой + водитель 5км 61 минут итого = $costTariffHourly <br />";


$tariffStudent = new Student();
$tariffStudent->setCountKm(5);
$tariffStudent->setCountMinute(61);
$tariffStudent->addService($gps);
$costTariffStudent = $tariffStudent->getPrice();
echo "Тариф студенческий 5км 61 минут + gps итого = $costTariffStudent <br />";
