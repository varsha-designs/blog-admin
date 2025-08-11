<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['id','title', 'slug', 'content', 'status','category', 'user_id','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
