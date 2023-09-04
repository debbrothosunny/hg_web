<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Gallery Model
    public function CatName()
    {
        return $this->belongsTo(Gallery_category::class, 'gallery_id', 'id');
    }
}
