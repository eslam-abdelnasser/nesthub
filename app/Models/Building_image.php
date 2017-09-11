<?php

namespace App\Models;

use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Database\Eloquent\Model;

class Building_image extends Model
{
    //
    protected $fillable = ['image_url'];
    protected $baseDir = 'buildings/images';
    public function building()
    {
        return $this->belongsTo(Building::class);
    }

}
