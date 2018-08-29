<?php

namespace App\Source\Repository;

use App\Source\Repository\BaseRepository;
use Eloquent;

class UserRoleRepository extends BaseRepository
{
    function model()
    {
        return 'App\Models\UserRole';
    }
}