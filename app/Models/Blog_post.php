<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_post extends Model
{
    use HasFactory;

    // Gallery Model
    public function CatName()
    {
        return $this->belongsTo(Blog_category::class, 'category_id', 'id');
    }
}
