<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Activity;

class Partner extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
