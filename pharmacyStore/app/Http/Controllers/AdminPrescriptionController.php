<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrescriptionModel;

class AdminPrescriptionController extends Controller
{
    public function index()
    {
        $prescriptions = PrescriptionModel::all();
        return view('_admin.admin_prescription_preview', compact('prescriptions'));
    }

    public function updateStatus(Request $request)
    {
        $prescription = PrescriptionModel::find($request->id);
        if ($prescription) {
            $prescription->status = $request->status;
            $prescription->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
