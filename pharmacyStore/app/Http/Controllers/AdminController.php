<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminShow(){
        return view('_admin.admin_dashboard');
    }
}
