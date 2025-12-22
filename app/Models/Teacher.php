<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory; use SoftDeletes;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'gender',
        'date_of_birth',

    ];

}
