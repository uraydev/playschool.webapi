<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'users';
    protected $primaryKey = '_id';

    protected $fillable = [
        'surname', 'name', 'patronymic'
    ];

    public function toArray()
    {
        $array = parent::toArray();
        $meta_list = $this->meta_list;
        foreach ($meta_list as $meta) {
            $array[$meta->key] = $meta->value;
        }
        return $array;
    }

    use Relations\HasMany\MetaOfUser;
}
