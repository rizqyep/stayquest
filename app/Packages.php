<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    public function accommodation()
    {
        return $this->hasOne(Accommodation::class, 'package_id', 'id');
    }

    public function quests()
    {
        return $this->hasMany(Quest::class, 'package_id', 'id');
    }
}