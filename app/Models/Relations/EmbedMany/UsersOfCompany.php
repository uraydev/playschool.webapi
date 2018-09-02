<?php

namespace App\Models\Relations\EmbedMany;

trait UsersOfCompany
{
    public function users()
    {
        return $this->embedsMany('App\Models\User');
    }
}