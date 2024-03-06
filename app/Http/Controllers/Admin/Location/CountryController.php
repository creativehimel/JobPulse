<?php

namespace App\Http\Controllers\Admin\Location;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = Country::select('id', 'name', 'short_code', 'phone_code');
            return DataTables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $button = '<button type="button" name="edit" id="'.$row->id.'" class="edit btn btn-warning btn-sm">Edit</button>';
                $button .= '<button type="button" name="delete" id="'.$row->id.'" class="ms-1 delete btn btn-danger btn-sm">Delete</button>';
                return $button;
            })
            ->make(true);
        }
        return view('admin.pages.location.country.index');
    }


    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required|string|unique:countries,name',
            'short_code' => 'required|string',
            'phone_code' => 'required|string',
        );
        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = array(
            'name' => $request->name,
            'short_code' => $request->short_code,
            'phone_code' => $request->phone_code,
        );
        Country::create($data);

        return response()->json(['success' => 'Country added successfully.']);
        
    }

    public function edit($id){
        if(request()->ajax()){
            $data = Country::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function update(Request $request)
    {
        $id = $request->hidden_id;
        $country = Country::findOrFail($id);

        $rules = array(
            'name' => 'required|string|unique:countries,name,'.$country->id,
            'short_code' => 'required|string',
            'phone_code' => 'required|string',
        );
        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = array(
            'name' => $request->name,
            'short_code' => $request->short_code,
            'phone_code' => $request->phone_code,
        );
        $country->update($data);
        
        return response()->json(['success' => 'Country updated successfully.']);
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return response()->json(['success'=> 'Country deleted successfully.']);
    }
}
