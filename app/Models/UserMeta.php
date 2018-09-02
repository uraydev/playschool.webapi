<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserMeta extends Eloquent
{
//    use Relations\BelongsTo\User;

    protected $connection = 'mongodb';
    protected $collection = 'users_meta';
    protected $primaryKey = '_id';

    protected $fillable = [
        'key', 'value', 'user__id'
    ];
}
