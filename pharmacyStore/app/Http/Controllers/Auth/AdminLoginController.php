<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Import Log for debugging

class AdminLoginController extends Controller
{
    public function loginShow(){
        return view('auth.admin_login');
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'adminEmail' => 'required|email',
            'adminPassword' => 'required',
        ]);

        Log::info('Attempting login with credentials: ', ['adminEmail' => $credentials['adminEmail']]);

        if (Auth::guard('admin')->attempt(['adminEmail' => $credentials['adminEmail'], 'password' => $credentials['adminPassword']])) {
            Log::info('Authentication successful');
            return redirect()->route('admin.profile');
        } else {
            Log::warning('Authentication failed');
            return back()->withErrors(['Invalid credentials']);
        }
    }
}
