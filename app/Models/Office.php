<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    //
    public function building()
    {
        return $this->belongsTo(Building::class);
    }
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
