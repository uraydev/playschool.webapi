<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;

class User extends Eloquent implements Authenticatable, JWTSubject
{
    use Notifiable;
    use AuthenticableTrait;

    protected $connection = 'mongodb';
    protected $collection = 'users';
    protected $primaryKey = '_id';

    protected $fillable = [
        'surname', 'name', 'email', 'patronymic', 'is_verified', 'password', 'remember_token'
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

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return ['test' => '12345'];
    }
}
