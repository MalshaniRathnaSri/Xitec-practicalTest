<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrescriptionModel;

class PrescriptionController extends Controller
{
    public function prescriptionUpload(){
        return view('pages.prescription_upload');
    }

    public function prescriptionStore(Request $request){
        $file = $request->file('prescription');
    
        $filename = time() . '_' . $file->getClientOriginalName();
    
        $file->move(public_path('upload'), $filename);
    
        $prescription = new PrescriptionModel();
        $prescription->patientName = $request->input('patientName');
        $prescription->imagePath = $filename; 
        $prescription->notes = $request->input('notes');
        $prescription->deliveryAddress = $request->input('deliveryAddress');
        $prescription->deliveryTime = $request->input('deliveryTime');
        $prescription->save();
    
        
        return redirect()->route('prescription.upload')->with('success', 'Prescription uploaded successfully');
    }  
}
