<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
       $teachers =  Teacher::with('students')->get();
       return $teachers;
    }
    // has one through teacher to student
    // has many through student to teacher
}
