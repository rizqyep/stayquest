<?php

namespace App;

use Facade\Ignition\Support\Packagist\Package;
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
        return number_format($rate / $count, 1, ".", ",");
    }

    public function fiveStars(){
        $total = $this->reviews->count();
        $fiveStars = PackageReview::where(['package_id'=>$this->id,'rating'=>5])->count();
        if ($fiveStars == 0) {
            return 0;
        }
        return $fiveStars/$total * 100;
    }
    public function fourStars()
    {
        $total = $this->reviews->count();
        $fourStars = PackageReview::where(['package_id' => $this->id, 'rating' => 4])->count();
        if ($fourStars == 0) {
            return 0;
        }
        return $fourStars/ $total  * 100;
    }
    public function threeStars()
    {
        $total = $this->reviews->count();
        $threeStars = PackageReview::where(['package_id' => $this->id, 'rating' => 3])->count();
        if ($threeStars == 0) {
            return 0;
        }
        return  $threeStars/$total  * 100;
    }
    public function twoStars()
    {
        $total = $this->reviews->count();
        $twoStars = PackageReview::where(['package_id' => $this->id, 'rating' => 2])->count();
        if ($twoStars == 0) {
            return 0;
        }
        return $twoStars/$total  * 100;
    }
    public function oneStars()
    {
        $total = $this->reviews->count();
        $oneStars = PackageReview::where(['package_id' => $this->id, 'rating' => 1])->count();

        if($oneStars==0){
            return 0;
        }
        return $oneStars/$total  * 100;
    }
   
}