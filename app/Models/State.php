<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{

    public function lga(): HasMany
    {
        return $this->hasMany(Lga::class);
    }
}
