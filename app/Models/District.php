<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public function scopeIsEnabled($query)
    {
        return $query->where('status', '1');
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
