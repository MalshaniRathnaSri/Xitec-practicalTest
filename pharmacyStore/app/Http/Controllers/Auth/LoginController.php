<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function profile(){
        return view('pages.customer_profile');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['email','required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials, $request->remember)){
            return redirect()->route('profile');
        }
        else{
            return back()->withErrors([
                'failed'=>'Invalid Credentials'
            ]);
        }
    }
}
