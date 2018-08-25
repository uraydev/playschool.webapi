<?php

namespace App\Source\Repository;

use Eloquent;

class PositionRepository extends BaseRepository
{
    function model()
    {
        return 'App\Models\Position';
    }
}