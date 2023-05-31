<?php

namespace App\AdditionalInterfaces;

require_once './vendor/autoload.php';

class GpsService implements AdditionalGpsInterface
{
    public $priceHour;

    public function __construct($priceHour)
    {
        $this->priceHour = $priceHour;
    }

    public function applyServiceGps(TariffAbstract $tariff)
    {
        $hours = ceil($tariff->getDuration() / 60);
        $additionalPrice = $hours * $this->priceHour;
        $tariff->addToPrice($additionalPrice);
    }
}
