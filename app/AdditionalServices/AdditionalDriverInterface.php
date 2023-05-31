<?php
namespace App\AdditionalServices;

use App\Tariffs\TariffAbstract;

interface AdditionalDriverInterface
{
    public function applyServiceDriver(TariffAbstract $tariff);
}
