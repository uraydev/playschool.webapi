<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserRole extends Eloquent
{
    use Relations\BelongsTo\User;
    use Relations\BelongsTo\Role;

    protected $connection = 'mongodb';
    protected $collection = 'user_roles';
    protected $primaryKey = '_id';

    protected $fillable = ['user__id', 'role__id'];
}
