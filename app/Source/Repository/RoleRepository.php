<?php

namespace App\Source\Repository;

use App\Source\Repository\BaseRepository;
use Eloquent;

class RoleRepository extends BaseRepository
{
    function model()
    {
        return 'App\Models\Role';
    }
}