<?php

namespace App\Tariffs;

require_once './vendor/autoload.php';

class BaseTariff extends TariffAbstract
{
    public function __construct($priceKm, $priceHours)
    {
        parent::__construct($priceKm, $priceHours);
    }

    public function calculatePrice($distance, $duration)
    {
        $this->price += ($distance * $this->priceKm) + ($duration * $this->priceMinute);
        return $this->price;
    }
}
