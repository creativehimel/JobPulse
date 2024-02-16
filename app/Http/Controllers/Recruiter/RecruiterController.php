<?php

namespace App\Http\Controllers\Recruiter;

use App\Models\Recruiter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RecruiterController extends Controller
{
    public function index(){
        return view("recruiter.pages.dashboard");
    }
    public function login(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:6'
            ]);
            $data = $request->all();
            if(Auth::guard('recruiter')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                notify()->success('Recruiter login successfully.');
                return redirect()->route('recruiter.index');
            }else{
                notify()->error('Invalid Email or Password');
                return redirect()->back();
            }
        }
        return view("recruiter.Auth.login");
    }

    public function register(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:recruiters,email',
                'password' => 'required|confirmed|string|min:6'
            ]);
            Recruiter::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password'=> Hash::make($request->password),
            ]);
            notify()->success('Recruiter created successfully.Please wait for account confrimation.');
            return redirect()->route('recruiter.login');
        }
        return view("recruiter.Auth.register");
    }


    public function logout(){
        Auth::guard('recruiter')->logout();
        notify()->success('Recruiter logout successfully.');
        return redirect()->route('recruiter.login');
    }
}
