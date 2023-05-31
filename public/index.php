<?php
require_once "./vendor/autoload.php";

use App\AdditionalServices\DriverService;
use App\AdditionalServices\GpsService;
use App\Tariffs\BaseTariff;

$baseTariff = new BaseTariff(15, 8);
$gpsService = new GpsService(15, 10);
$driverService = new DriverService(100);
$gpsService->applyServiceGps($baseTariff);
$driverService->applyServiceDriver($baseTariff);
$baseTariffPrice = $baseTariff->calculatePrice(7, 60);

if(isset($baseTariff)) {
    echo 'Базовый тариф';
}

if(isset($hourlyTariff)) {
    echo 'Часовой тариф';
}

if(isset($studentTariff)) {
    echo 'Студенческий тариф';
}

if (isset($gpsService)) {
    echo ' + услуги GPS';
}
if (isset($driverService)) {
    echo ' + услуги водителя';
}

echo " = $baseTariffPrice рублей <br>";
