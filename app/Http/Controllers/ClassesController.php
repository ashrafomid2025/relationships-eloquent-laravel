<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //
    public function index(){
       $classes =  Classes::with('teacher')->get();
      return $classes;
    }
}
