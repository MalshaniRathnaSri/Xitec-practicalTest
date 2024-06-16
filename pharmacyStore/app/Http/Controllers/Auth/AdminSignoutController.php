<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminSignoutController extends Controller
{
    public function adminLogout(){
        Auth::logout();

        return redirect()->route('admin.show');
    }
}
