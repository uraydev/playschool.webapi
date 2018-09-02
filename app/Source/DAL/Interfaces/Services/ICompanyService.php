<?php

namespace App\Source\DAL\Interfaces\Services;

use App\Source\DAL\Interfaces\ICrud;

interface ICompanyService extends ICrud
{
    /**
     * Инициализация компании
     * $array['uid']    - идентификатор компании, генерируется на стороне WP
     * $array['name']   - наименование компании, вводит пользователь при регистрации на стороне WP
     * $array['user']   - объект user, содержащий основные данные о пользователе при регистрации на стороне WP
     *
     * @param $array
     * @return mixed
     */
    public function init_company($array);
}