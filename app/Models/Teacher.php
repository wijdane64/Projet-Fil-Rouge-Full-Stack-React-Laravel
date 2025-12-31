<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'gender',
        'date_of_birth',
        'specialization',

    ];
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
    
    
}

