<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
       $teachers =  Teacher::with('images')->get();
      //  return $teachers;
       return view('Teacher.allTeacher')->with('teachers',$teachers);
     }

     public function showAddForm(){
        $users =  User::all();
       return view('Teacher.add', compact('users'));
       }
      public function create(Request $request){
       $teacher =   new Teacher();
       $request->validate([
         "name"=>"required|min:3|max:20",
         "phoneNumber"=>"required|min:10|max:10",
         "image"=> "nullable|image|mimes:png, jpg,gif, jpeg"
       ]);
       $path = null;
       if($request->hasFile("image")){
          $path = $request->file("image")->store("images","public");
       }
       $teacher->name = $request->name;
       $teacher->phoneNumber = $request->phoneNumber;
       $teacher->user_id = $request->user_id;
      $teacher->save();

      $image =  new Image();
      $image->path = $path;
      $image->imageable_id = $teacher->id;
      $image->imageable_type = Teacher::class;
      $image->save();
      return redirect('/');   
   }

    // has one through teacher to student
    // has many through student to teacher
    // max, min, avg, limit, where, where , orWhere
}
