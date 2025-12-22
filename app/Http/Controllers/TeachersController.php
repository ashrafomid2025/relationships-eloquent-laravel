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
      public function create(Request $request){
         $teacher = new Teacher();
         $request->validate([
            "name"=> "required|min:5|max:20",
            "image"=> "nullable|image|mimies:jpg,png,gif"
         ]);
         $teacher->name = $request->name;
         $teacher->phoneNumber = $request->phoneNumber;
         $teacher->user_id = $request->user_id;
      }

    // has one through teacher to student
    // has many through student to teacher
    // max, min, avg, limit, where, where , orWhere
}
