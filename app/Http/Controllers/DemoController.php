<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        $listClassroom = Classroom::all();
        return view('demo.index', [
            "listClassroom" => $listClassroom,
        ]);
    }

    public function getStudentsByIdClass($id)
    {
        $listStudent = Student::where('idClass', $id)->get();
        return $listStudent;
    }
}
