<?php

namespace App\Http\Controllers\Recruiter;

use App\Models\Admin;
use App\Models\Recruiter;
use Illuminate\Http\Request;
use App\Mail\ResetPasswordMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function forgotPassword(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'email' => 'required|email',
            ]);
            $recruiter = Recruiter::where('email', $request->email)->first();
            if(!$recruiter){
                notify()->error('User not found against this email. Please input the write email address.');
                return redirect()->back();
            }
            $token = hash('sha256', time());
            $recruiter->token = $token;
            $recruiter->update();
            $resetLink = url('recruiter/reset-password/'.$token.'/'.$request->email);
            Mail::to($recruiter->email)->send(new ResetPasswordMail($resetLink));
            notify()->success('Reset password link sent successfully.');
            return redirect()->back();

        }
        return view("recruiter.Auth.forgotPassword");
    }

    public function resetPassword($token, $email){
        $recruiter = Recruiter::where("email", $email)->where('token', $token)->first();
        if(!$recruiter){
            notify()->error('Invalid token or email');
            return redirect()->route('recruiter.forgot.password');
        }
        
        return view("recruiter.Auth.resetPassword", compact("token", "email"));
    }
    public function updatePassword(Request $request){
        $request->validate([
            "password" => "required|confirmed"
        ]);
        $recruiter = Recruiter::where("email", $request->email)->where('token', $request->token)->first();
        $recruiter->password = Hash::make($request->password);
        $recruiter->update();
        notify()->success('Password reset successfully.');
        return redirect()->route('recruiter.login');
    }

    public function logout(){
        Auth::guard('recruiter')->logout();
        notify()->success('Recruiter logout successfully.');
        return redirect()->route('recruiter.login');
    }
}
