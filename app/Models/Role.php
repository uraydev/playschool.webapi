<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'roles';
    protected $primaryKey = '_id';

    protected $fillable = ['name', 'description'];
}
