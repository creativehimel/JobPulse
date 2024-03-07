<?php

namespace App\Http\Controllers\Admin\Location;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    public function index(Request $request)
    {
        //$cities = City::orderBy('name', 'asc')->get();
        $states = State::all();

        if($request->ajax()){
            $data = City::with('state')->get();
            return DataTables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $button = '<button type="button" name="edit" id="'.$row->id.'" class="edit btn btn-warning btn-sm">Edit</button>';
                $button .= '<button type="button" name="delete" id="'.$row->id.'" class="ms-1 delete btn btn-danger btn-sm">Delete</button>';
                return $button;
            })
            ->make(true);
        }

        return view('admin.pages.location.city.index', compact('states'));
    }

    public function edit($id){
        if(request()->ajax()){
            $data = City::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'state_id' => 'required|string',
        ];

        $error = Validator::make($request->all(), $rules);

        if($error->fails()){
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = [
            'name' => $request->name,
            'state_id' => $request->state_id,
        ];

        City::create($data);
        return response()->json(['success' => 'City added successfully.']);
    }

    public function update(Request $request, $id)
    {
        $id = $request->hidden_id;
        $city = City::findOrFail($id);
        $rules = [
            'name' => 'required|string',
            'state_id' => 'required|string',
        ];
        
        $error = Validator::make($request->all(), $rules);

        if($error->fails()){
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $data = [
            'name' => $request->name,
            'state_id' => $request->state_id,
        ];
        $city->update($data);
        

        return response()->json(['success'=> 'City updated successfully.']);
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return response()->json(['success' => 'City deleted successfully.']);
    }
}
