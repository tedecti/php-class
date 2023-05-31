<?php
namespace App\Tariffs;

use App\TariffAbstract;

class StudentTariff extends TariffAbstract
{
    public function __construct($priceKm, $priceMinute)
    {
        parent::__construct($priceKm, $priceMinute);
    }

    public function calculatePrice($distance, $duration)
    {
        $this->price += ($distance * $this->priceKm) + ($duration * $this->priceMinute);
        return $this->price;
    }
}
