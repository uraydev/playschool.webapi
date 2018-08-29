<?php

namespace App\Models\Relations\HasMany;

trait RolesOfUser
{
    public function roles()
    {
        return $this->HasMany('App\Models\UserRole', 'user_id');
    }
}