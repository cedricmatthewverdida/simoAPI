<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logins extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
        'id',
        'username',
        'password',
        'role',
        'accountid'
    ];

}
