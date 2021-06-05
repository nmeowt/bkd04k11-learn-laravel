<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // method
    public function index($name)
    {
        // return view('student.index', compact('name'));
        return view('student.index', [
            "a" => $name
        ]);
    }
}
