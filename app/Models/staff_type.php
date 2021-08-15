<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_type extends Model
{
    use HasFactory;

    protected $table = 'staff_type';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'staff_id',
        'status',
        'start_date',
        'end_date'
    ];
}
