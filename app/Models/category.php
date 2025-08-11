<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     protected $table = 'category';
    protected $fillable = ['name', 'slug'];

    public function post(){
        return $this->hasMany(Post::class);
    }



}
