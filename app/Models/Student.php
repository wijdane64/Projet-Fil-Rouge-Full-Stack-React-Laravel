<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
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
        'level_id',
        'parent_name',
        'parent_phone',
        'parent_email',
        
    ];
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
