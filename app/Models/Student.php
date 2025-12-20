<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    public function user(){
       return  $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function subject(){
        return $this->belongsToMany(Subject::class,'grades','student_id','subject_id')->withPivot('score');
    }
    public function teacher(){
        return $this->hasOneThrough(Teacher::class, Classes::class, 'id', 'id','class_id', 'teacher_id');
    }
    // with pivote to get the grade 
    
}
