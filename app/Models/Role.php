<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(permission::class);
    }
     public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
