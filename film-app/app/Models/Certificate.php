<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Certificate extends Model
{
    public function films(): HasMany
    {
        return $this->hasMany(Film::class);
    }
}