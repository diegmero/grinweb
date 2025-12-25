<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'type', 'description', 'is_visible'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
