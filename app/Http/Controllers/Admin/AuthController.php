<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        //  dd($request);
     
        $remember = $request->remember == 'on' ? true : false;
        
        $credentials=[
            'email' => $request->email,
            'password' => $request->password,
            
        ];

        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            return redirect()->intended(route('admin.dashboard'));
        }else{
            // toastr()->error('Incorrect email or password');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
     {  
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
