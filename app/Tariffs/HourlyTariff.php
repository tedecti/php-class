<?php

use App\TariffAbstract;

class HourlyTariff extends TariffAbstract
{
    private $hourlyPrice;

    public function __construct($hours, $hourlyPrice = 200)
    {
        parent::__construct(0, 0);
        $this->hourlyPrice = $hours * $hourlyPrice;
    }

    public function calculatePrice($distance, $duration)
    {
        $this->price += ($distance * $duration * $this->hourlyPrice);
        return $this->price;
    }

    public function getDuration()
    {
        return 60;
    }
}
