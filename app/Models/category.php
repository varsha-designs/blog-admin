<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // only if table name is 'category', else Laravel assumes 'categories'
    protected $fillable = ['id', 'title', 'slug', 'content', 'category', 'user_id','categories_id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}

