<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\OwnershipType;
use Illuminate\Http\Request;

class OwnershipTypeController extends Controller
{
    public function index()
    {
        $ownershipTypes = OwnershipType::orderBy('name', 'asc')->get();

        return view('admin.pages.company.ownershipType', compact('ownershipTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:ownership_types,name',
        ]);
        OwnershipType::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        notify()->success('Ownership type created successfully.');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $ownershipType = OwnershipType::findOrFail($id);
        $request->validate([
            'name' => 'required|string|unique:ownership_types,name,'.$ownershipType->id,
        ]);
        $ownershipType->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        notify()->success('Ownership type updated successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        OwnershipType::findOrFail($id)->delete();
        notify()->success('Ownership type deleted successfully.');

        return redirect()->back();
    }
}
