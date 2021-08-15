<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_appointment extends Model
{
    public $timestamps = false;
    protected $table = 'patient_appointment';
    use HasFactory;

    protected $fillable = [
        'id',
        'staff_id',
        'patient_id',
        'date_time',
        'room'
    ];
}
