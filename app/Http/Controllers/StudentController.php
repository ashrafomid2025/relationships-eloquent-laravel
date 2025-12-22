<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
     public function index()
     {
       $students =  Student::where('id','>',56)->get();   
       return $students;
    }
    
}
