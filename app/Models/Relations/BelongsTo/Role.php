<?php

namespace App\Models\Relations\BelongsTo;

trait Role
{
    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role__id');
    }
}