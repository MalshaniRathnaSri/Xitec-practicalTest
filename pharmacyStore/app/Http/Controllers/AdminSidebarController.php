<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrescriptionModel;

class AdminSidebarController extends Controller
{
    public function showProfile(){
        return view('_admin.admin_profile');
    }

    public function showPrescriptionPreview(){
        $prescriptions = PrescriptionModel::all();

        return view ('_admin.admin_prescription_preview', compact('prescriptions'));
    }
}
