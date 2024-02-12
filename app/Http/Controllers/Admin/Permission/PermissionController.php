<?php

namespace App\Http\Controllers\Admin\Permission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::orderby("id", "desc")->get();
        return view("admin.pages.permission.index", compact("permissions"));
    }
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required|string|unique:permissions,name",
            ]);

        Permission::create([
            "name"=> $request->name
            ]);
            notify()->success('Permission created successfully');
            return redirect()->back();
    }
    public function update(Request $request,$id)
    {
        $permission = Permission::findOrFail($id);
        $request->validate([
            "name"=> "required|string|unique:permissions,name,".$permission->id,
            ]);
        $permission->update([
            "name"=> $request->name
            ]);
        return redirect()->back()->with("success","Permission updated sucssfully.");
    }
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        return redirect()->back()->with("success","Permission deleted successfully");
    }
}
