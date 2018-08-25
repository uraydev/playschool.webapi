<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Position extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'positions';
    protected $primaryKey = '_id';

    protected $fillable = [
        'name', 'description'
    ];
}
