<?php

namespace App\Models\Relations\EmbedMany;

trait DemandsOfCompany
{
    public function demands()
    {
        return $this->embedsMany('App\Models\Demand');
    }
}