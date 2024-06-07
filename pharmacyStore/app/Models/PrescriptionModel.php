<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionModel extends Model
{
    protected $table = 'prescription';
    protected $fillable = ['patientName','imagePath','notes','deliveryAddress','deliveryTime'];
    use HasFactory;
}
