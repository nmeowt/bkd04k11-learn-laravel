<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassroomController extends Controller
{
    public function create()
    {
        return view('class.create');
    }

    public function store(Request $req)
    {
        $name = $req->get('name');
        // QUERY RAW
        // DB::insert('INSERT INTO classroom(name) values (?)', [
        //     $name
        // ]);
        // ORM 
        $classroom = new Classroom();
        $classroom->name = $name;
        $classroom->save();
    }
}
