<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Company extends Eloquent
{
    use Relations\EmbedMany\DemandsOfCompany;
    use Relations\EmbedMany\UsersOfCompany;

    protected $connection = 'mongodb';
    protected $collection = 'companies';
    protected $primaryKey = '_id';

    protected $fillable = ['name', 'uid'];
    protected $guarded = [];
}
