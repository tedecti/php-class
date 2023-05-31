<?php

namespace App\AdditionalServices;

use App\Tariffs\TariffAbstract;

require_once './vendor/autoload.php';

class DriverService implements AdditionalDriverInterface {
    public $priceDriver;

    public function __construct($priceDriver)
    {
        $this->priceDriver = $priceDriver;
    }

    public function applyServiceDriver(TariffAbstract $tariff)
    {
        $tariff->addToPrice($this->priceDriver);
    }
}