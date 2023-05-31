<?php

namespace App;

require_once './vendor/autoload.php';

trait GpsServiceTrait
{
    public $priceHour;

    public function applyServiceGps(TariffAbstract $tariff)
    {
        $hours = ceil($tariff->getDuration() / 60);
        $additionalPrice = $hours * $this->priceHour;
        $tariff->addToPrice($additionalPrice);
    }
}

trait DriverServiceTrait
{
    public $priceDriver;

    public function applyServiceDriver(TariffAbstract $tariff)
    {
        $tariff->addToPrice($this->priceDriver);
    }
}

class GpsService implements AdditionalGpsInterface
{
    use GpsServiceTrait;

    public function __construct($priceHour)
    {
        $this->priceHour = $priceHour;
    }
}

class DriverService implements AdditionalDriverInterface
{
    use DriverServiceTrait;

    public function __construct($priceDriver)
    {
        $this->priceDriver = $priceDriver;
    }
}
