<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    public function package()
    {
        return $this->belongsTo(Packages::class, 'package_id', 'id');
    }
}