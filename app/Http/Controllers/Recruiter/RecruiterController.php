<?php

namespace App\Http\Controllers\Recruiter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            dd($request->all());
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|confirmed|string|min:6'
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
        return view("recruiter.Auth.register");
    }


    public function logout(){
        Auth::guard('recruiter')->logout();
        notify()->success('Recruiter logout successfully.');
        return redirect()->route('recruiter.login');
    }
}
