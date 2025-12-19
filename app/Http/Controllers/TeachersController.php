<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
       $teachers =  Teacher::with('classes')->get();
       return $teachers;
    }
}
