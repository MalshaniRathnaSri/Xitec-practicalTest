<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminRegistrationModel;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RegistrationController extends Authenticatable
{
    public function showRegistrationForm(){
        return view('auth.admin_registration'); 
    }

    public function storeData(Request $request){
        $request -> validate([
            'adminId' => 'required|integer',
            'adminName' => 'required|string|max:255',
            'adminContactNumber' => 'required|string|max:10',
            'adminEmail' => 'required|email|max:255|unique:admin_registration',
            'adminPassword' => 'required|max:50|string'
        ]);

        $adminregistration = AdminRegistrationModel::Create([
            'adminId' => $request->adminId,
            'adminName' => $request->adminName,
            'adminContactNumber' => $request->adminContactNumber,
            'adminEmail' => $request->adminEmail,
            'adminPassword' => Hash::make($request->adminPassword)
        ]);

        return redirect()->route('admin.profile');

        Auth::login($adminregistration);
    }
    public function getAuthPassword()
    {
        return $this->adminPassword;
    }

}
