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


    public function idrPrice()
    {
        $idrFormatted = "IDR " . number_format($this->price, 2, ',', '.');
        return $idrFormatted;
    }

    public function reviews()
    {
        return $this->hasMany(PackageReview::class, 'package_id', 'id');
    }

    public function rating()
    {
        $count = 0;
        $rate = 0;
        foreach ($this->reviews as $review) {
            $count += 1;
            $rate += $review->rating;
        }
        if ($count == 0 && $rate == 0) {
            return "0.0";
        }
        return number_format($count / $rate, 1, ".", ",");
    }
}