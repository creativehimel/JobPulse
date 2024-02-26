<?php

namespace App\Http\Controllers\Admin\Location;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('name', 'asc')->get();

        return view('admin.pages.location.country', compact('countries'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|string|unique:countries,name',
            'short_code' => 'required|string',
        ]);
        $country = Country::create([
            'name' => $request->name,
            'short_code' => $request->short_code,
            'phone_code' => $request->phone_code,
        ]);
        notify()->success('Country created successfully.');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $country = Country::findOrFail($id);
        $request->validate([
            'name' => 'required|string|unique:permissions,name,'.$country->id,
            'short_code' => 'required|string',
        ]);
        $country->update([
            'name' => $request->name,
            'short_code' => $request->short_code,
            'phone_code' => $request->phone_code,
        ]);
        notify()->success('Country updated successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        notify()->success('Country deleted successfully');

        return redirect()->back();
    }
}
