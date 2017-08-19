<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //
    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}
