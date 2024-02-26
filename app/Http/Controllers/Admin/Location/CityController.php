<?php

namespace App\Http\Controllers\Admin\Location;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::orderBy('name', 'asc')->get();
        $countries = Country::orderBy('name', 'asc')->get();

        return view('admin.pages.location.city', compact('cities', 'countries'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'country_id' => 'required|string',
        ]);
        City::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);
        notify()->success('City created successfully.');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {

        $city = City::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'country_id' => 'required|string',
        ]);
        $city->update([
            'name' => $request->name,
            'country_id' => $request->country_id,
        ]);
        notify()->success('City updated successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        notify()->success('City deleted successfully.');

        return redirect()->back();
    }
}
