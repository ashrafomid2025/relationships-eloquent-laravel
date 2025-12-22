<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
       $teachers =  Teacher::with('students', 'classes')->where('user_id','<',86)->get();
       return $teachers;
     }

     public function showAddForm(){
        $users =  User::all();
       return view('Teacher.add', compact('users'));
       }

    // has one through teacher to student
    // has many through student to teacher
    // max, min, avg, limit, where, where , orWhere
}
