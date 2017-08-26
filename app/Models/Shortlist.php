<?php

namespace App\Models;

use App\Admin;
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
        return $this->belongsTo(Admin::class);
    }
}
