<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function showProfile(){
        return view('_admin.admin_profile');
    }
}
