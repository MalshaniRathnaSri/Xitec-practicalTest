<?php

namespace App\Http\Controllers;

use App\Models\AdminCalculationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminCalculationController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Request Data: ', $request->all());

        $request->validate([
            'prescription_id' => 'required|exists:prescription,id',
            'details' => 'required|array',
            'details.*.drug' => 'required|string|max:255',
            'details.*.quantity' => 'required|integer',
            'details.*.amount' => 'required|numeric',
        ]);

        DB::transaction(function () use ($request) {
            foreach ($request->details as $detail) {
                Log::info('Saving detail: ', $detail);
                AdminCalculationModel::create([
                    'prescription_id' => $request->prescription_id,
                    'drug' => $detail['drug'],
                    'quantity' => $detail['quantity'],
                    'amount' => $detail['amount'],
                ]);
            }
        });

        return response()->json(['success' => 'Prescription details saved successfully']);
    }
}
