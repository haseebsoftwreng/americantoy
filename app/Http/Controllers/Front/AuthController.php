<?php

namespace App\Http\Controllers\Front;

use App\Helpers\Validation;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request){
        // dd($request);
        $credentials = Validation::registration($request, User::class);
        
        if($credentials->fails()){
            alert()->error($credentials->errors()->first(), 'Error');
            return redirect()->back()->withInput();
        }else{

            $user = User::create($request->all());
            alert()->success('Registered Successfully', 'Done');
            return redirect()->route('front.login');
        }

    }

    public function login(Request $request)
    {
        // dd($request);
        
        $credentials=[
            'email' => $request->email,
            'password' => $request->password,
            
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }else{
            // toastr()->error('Incorrect email or password');
            alert()->error('Incorrect Email or Password', 'Error');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {  
        Auth::logout();
        return redirect()->route('front.login');
    }
}
