<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    //
    public function offices()
    {
        return $this->hasMany(Office::class);
    }
    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function highlights()
    {
        return $this->hasMany(Highlight::class);
    }
    public function building_images()
    {
        return $this->hasMany(Building_image::class);
    }
    public function viewing_requests()
    {
        return $this->hasMany(Viewing_request::class);
    }
    public function providing_requests()
    {
        return $this->hasMany(Providing_request::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
