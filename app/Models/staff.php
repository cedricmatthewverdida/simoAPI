<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    public $timestamps = false;
    
    use HasFactory;

    protected $fillable = [
        'id ',
        'staff_fname',
        'staff_mname',
        'staff_lname',
        'full_address',
        'telephone_number',
        'date_of_birth',
        'sex',
        'nin'
    ];
}
