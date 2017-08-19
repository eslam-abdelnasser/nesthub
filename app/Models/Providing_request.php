<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Providing_request extends Model
{
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
