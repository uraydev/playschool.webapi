<?php

namespace App\Models\Relations\BelongsTo;

trait User
{
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user__id');
    }
}