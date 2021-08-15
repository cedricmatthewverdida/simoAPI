<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    public $timestamps = false;
    protected $table = 'patient';
    use HasFactory;

    protected $fillable = [
        'id ',
        'patient_fname',
        'patient_mname',
        'patient_lname',
        'address',
        'telephone_number',
        'date_of_birth',
        'sex',
        'marital_status',
        'date_registered',
        'nok_id'
    ];
}
