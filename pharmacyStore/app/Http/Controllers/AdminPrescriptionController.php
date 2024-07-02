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
            return response()->json(['success' => true, 'id' => $prescription->id]);
        }
        return response()->json(['success' => false]);
    }

    public function redirectPage($id)
    {
        $prescription = PrescriptionModel::find($id);
        if (!$prescription) {
            return redirect()->route('admin.prescriptions.index')->with('error', 'Prescription not found');
        }
        return view('_admin.admin_calculation', compact('prescription'));
    }

}
