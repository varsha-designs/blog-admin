<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    public function post(){
        return $this->hasMany(Post::class);
    }
}
