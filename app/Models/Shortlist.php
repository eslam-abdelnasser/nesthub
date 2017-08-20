<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Shortlist extends Model
{
    //
    public function buildings()
    {
        return $this->belongsTo(Building::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
