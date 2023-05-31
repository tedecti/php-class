<?php
namespace App;

require_once './vendor/autoload.php';

interface AdditionalDriverInterface
{
    public function applyServiceDriver(TariffAbstract $tariff);
}
