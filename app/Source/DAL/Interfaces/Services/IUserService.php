<?php

namespace App\Source\DAL\Interfaces\Services;

use App\Source\DAL\Interfaces\ICrud;

interface IUserService extends ICrud
{
    public function new_user($company, $data);
}