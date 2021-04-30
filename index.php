<?php

namespace CarSharing;

require_once "src/class/Service.php";
require_once "src/class/AdditionalService.php";
require_once "src/class/RoundingMinute.php";
require_once "src/class/Cost.php";
require_once "src/class/Driver.php";
require_once "src/class/Gps.php";
require_once "src/class/ServiceDriver.php";
require_once "src/class/ServiceGps.php";
require_once "src/class/Tariff.php";
require_once "src/class/TariffBasic.php";
require_once "src/class/TariffHourly.php";
require_once "src/class/TariffStudent.php";

$gps = new ServiceGps(3, 15);
$driver = new ServiceDriver(100);

$tariffBasic = new TariffBasic();
$tariffBasic->addService($gps);
$tariffBasic->addService($driver);
$costTariffBasic = $tariffBasic->calculationCost(5, 60);
echo "Тариф базовый + gps + водитель 5км 60 минут итого = $costTariffBasic <br />";

$tariffStudent = new TariffStudent();
$costTariffStudent = $tariffStudent->calculationCost(5, 60);
echo "Тариф студенческий 5км 60 минут итого = $costTariffStudent <br />";

$tariffHourly = new TariffHourly();
$tariffHourly->addService($driver);
$costTariffHourly = $tariffHourly->calculationCost(5, 61);
echo "Тариф почасовой + водитель 5км 61 минут итого = $costTariffHourly <br />";
