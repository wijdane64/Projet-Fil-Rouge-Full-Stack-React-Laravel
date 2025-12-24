<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'level_id',
        'subject_id',
        'teacher_id',
        'day',
        'start_time',
        'end_time',
        
        
    ];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }      
}