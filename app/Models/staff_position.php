<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_position extends Model
{
    use HasFactory;
    
    
    protected $table = 'staff_position';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'staff_id',
        'staff_description',
        'current_salary',
        'salary_scale'
    ];
}
