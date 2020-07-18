<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user(){
        return $this->hasMany(User::class);
    }
}
