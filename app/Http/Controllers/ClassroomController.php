<?php

namespace App\Http\Controllers;

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
        DB::insert('INSERT INTO classroom(name) values (?)', [
            $name
        ]);
    }
}
