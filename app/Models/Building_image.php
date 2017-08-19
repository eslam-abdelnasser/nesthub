<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building_image extends Model
{
    //
    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
