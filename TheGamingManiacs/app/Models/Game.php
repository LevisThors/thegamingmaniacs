<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image_url',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
