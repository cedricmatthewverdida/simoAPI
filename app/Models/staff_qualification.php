<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_qualification extends Model
{
    use HasFactory;
    
    
    protected $table = 'staff_qualification';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'staff_id',
        'qualification_date',
        'type',
        'institution_name'
    ];
}
