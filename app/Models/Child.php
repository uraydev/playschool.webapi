<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Child extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'children';

    protected $fillable = [
        'first_name', 'last_name','birthday', 'gender'
    ];
}
