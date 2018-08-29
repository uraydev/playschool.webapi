<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'user_roles';
    protected $primaryKey = '_id';

    protected $fillable = ['user_id', 'role_id'];
}
