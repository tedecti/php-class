<?php

namespace App\Tariffs;

abstract class TariffAbstract
{
    protected $priceKm;
    protected $priceMinute;
    public $price;

    public function __construct($priceKm, $priceMinute)
    {
        $this->priceKm = $priceKm;
        $this->priceMinute = $priceMinute;
        $this->price = 0;
    }

    public abstract function calculatePrice($distance, $duration);

    public function getPrice()
    {
        return $this->price;
    }

    public function addToPrice($amount)
    {
        $this->price += $amount;
    }

    public function getDuration()
    {
        return 60;
    }
}
