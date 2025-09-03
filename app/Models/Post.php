<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{

    protected $fillable = ['title', 'slug', 'content', 'status', 'user_id', 'category', 'categories_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
