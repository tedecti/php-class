<?php
namespace App\AdditionalServices;

use App\Tariffs\TariffAbstract;

interface AdditionalGpsInterface
{
    public function applyServiceGps(TariffAbstract $tariff);
}
