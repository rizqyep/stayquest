<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    public function getCity($province_name)
    {
        $province = DB::table('indonesia_provinces')->where('name', $province_name)->first();
        $cities = DB::table('indonesia_cities')->where('province_id', $province->id)->get();

        return json_encode($cities);
    }
}