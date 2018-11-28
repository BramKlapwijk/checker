<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class AppUser extends Model
{
    public static function scopeFindSession($q)
    {
        return $q->where('token', session('token'))->first();
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
