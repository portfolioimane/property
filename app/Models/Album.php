<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
     protected $table = 'albums';
    protected $fillable = ['name','user_id'];

    public function galleryimages()
    {
        return $this->hasMany(Gallery::class);
    }
}
