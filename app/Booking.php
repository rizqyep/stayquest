<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function package()
    {
        return $this->belongsTo(Packages::class, 'pacakge_id', 'id');
    }
}