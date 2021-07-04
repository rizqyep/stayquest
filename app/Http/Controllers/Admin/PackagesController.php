<?php

namespace App\Http\Controllers\Admin;

use App\Accommodation;
use App\Http\Controllers\Controller;
use App\Packages;
use Alert;
use App\Quest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Packages::paginate(5);
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        $provinces = \Indonesia::allProvinces();
        return view('admin.packages.create', compact('provinces'));
    }

    public function store(Request $request)
    {
        $image = Storage::disk('public')->put('package_images', $request->image);


        $package = new Packages();
        $package->name = $request->name;
        $package->description = "Description";
        $package->price = $request->price;
        $package->province = $request->province;
        $package->city = $request->city;
        $package->image = $image;
        $package->duration = $request->duration;
        $package->save();

        $accommodation = new Accommodation();
        $accommodation->name = $request->accommodation_name;
        $accommodation->capacity = $request->capacity;

        $accommodation->package_id = $package->id;
        $accommodation->save();

        Alert::success('Succcess', 'Package successfully added!');

        return redirect('/admin/packages');
    }


    public function showQuests($package_id)
    {
        $package = Packages::find($package_id);
        $quests = Quest::where('package_id', $package_id)->get();
        return view('admin.packages.quests', compact('quests', 'package'));
    }

    public function storeQuests(Request $request, $package_id)
    {
        $icon = Storage::disk('public')->put('quest_icons', $request->icon);
        $quest = new Quest();
        $quest->name = $request->name;
        $quest->package_id = $package_id;
        $quest->icon = $icon;
        $quest->points = $points;
        $quest->save();
        Alert::success('Succcess', 'Quest has been successfully added!');

        return redirect('/admin/packages/quests/' . $package_id);
    }
}