<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ]);
            $data = $request->all();
            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                notify()->success('Admin login successfully.');

                return redirect()->route('admin.index');
            } else {
                notify()->error('Invalid Email or Password');

                return redirect()->back();
            }
        }

        return view('admin.Auth.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        notify()->success('Admin logout successfully.');

        return redirect('/admin/login');
    }
}
