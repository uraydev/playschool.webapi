<?php

namespace App\Source\DAL\Interfaces\Services;

use App\Source\DAL\Interfaces\ICrud;

interface ICompanyService extends ICrud
{
    /**
     * ������������� ��������
     * $array['uid']    - ������������� ��������, ������������ �� ������� WP
     * $array['name']   - ������������ ��������, ������ ������������ ��� ����������� �� ������� WP
     * $array['user']   - ������ user, ���������� �������� ������ � ������������ ��� ����������� �� ������� WP
     *
     * @param $array
     * @return mixed
     */
    public function init_company($array);
}