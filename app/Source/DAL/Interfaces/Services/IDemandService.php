<?php

namespace App\Source\DAL\Interfaces\Services;

use App\Source\DAL\Interfaces\ICrud;

interface IDemandService extends ICrud
{
    public function new_demand($company, $array);
}