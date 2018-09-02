<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Demand extends Eloquent
{
    protected $connection = 'mongodb';
    protected $primaryKey = '_id';

    protected $fillable = [
        'name', 'description'
    ];
}
