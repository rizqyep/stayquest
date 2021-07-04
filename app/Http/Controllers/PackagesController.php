<?php

namespace App\Http\Controllers;

use App\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function show($package_id)
    {
        $package = Packages::find($package_id);
        return view('packages.show', compact('package'));
    }
}