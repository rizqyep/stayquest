<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        return view('admin.packages.index');
    }

    public function create()
    {
        $provinces = \Indonesia::allProvinces();
        return view('admin.packages.create', compact('provinces'));
    }
}