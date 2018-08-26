<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Demand extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'demands';
    protected $primaryKey = '_id';

    protected $fillable = [
        'name', 'description', 'author_id', 'responsible_id'
    ];
}
