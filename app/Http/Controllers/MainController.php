<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packages;

class MainController extends Controller
{
    public function index()
    {
        $recommendedPackages = Packages::paginate(5);

        return view('welcome', compact('recommendedPackages'));
    }
}