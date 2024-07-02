<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCalculationModel extends Model
{
    use HasFactory;

    protected $table = 'admin_calculation';
    protected $fillable = ['prescription_id','drug','quantity','amount'];
}
