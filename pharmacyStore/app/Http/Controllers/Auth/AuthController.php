<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistration(){
        return view('auth.Register');
    }

    public function store(Request $request){
        //validate
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact' => 'required|string|max:255',
            'dob' => 'required|date',
            'address' => 'required|string|max:500',
            'password' => 'required|string|confirmed|min:8',
        ]);
        
        //store
        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'contact' => $request->contact,
            'dob' => $request->dob,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('register');

        //login
        Auth::login($user);
    }
}
