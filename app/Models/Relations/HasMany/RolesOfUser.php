<?php

namespace App\Models\Relations\HasMany;

trait RolesOfUser
{
    public function roles_of_user()
    {
        return $this->HasMany('App\Models\UserRole', 'user__id');
    }
}