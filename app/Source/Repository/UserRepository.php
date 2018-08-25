<?php

namespace App\Source\Repository;

use App\Source\Repository\BaseRepository;
use Eloquent;

class UserRepository extends BaseRepository
{
    function model()
    {
        return 'App\Models\User';
    }
}