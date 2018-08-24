<?php

namespace App\Models\Relations\HasMany;

trait MetaOfUser
{
    public function meta_list()
    {
        return $this->HasMany('App\Models\UserMeta', 'user__id');
    }
}