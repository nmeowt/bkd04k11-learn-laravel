<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $idClass = $request->get('id-class');
        $listStudent = Student::where('name', 'LIKE', "%$search%")->where('idClass', $idClass)->paginate(5);
        $listClassroom = Classroom::all();

        return view('student.index', [
            "listStudent" => $listStudent,
            "search" => $search,
            "listClassroom" => $listClassroom,
            "idClass" => $idClass
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hide($id)
    {
        # code...
    }

    public function insertByExcel()
    {
        return view('student.insert-by-excel');
    }

    public function insertByExcelProcess(Request $request)
    {
        Excel::import(new StudentsImport, $request->file('excel'));
        echo "done";
        // return $request;
    }

    public function export()
    {
        return Excel::download(new StudentsExport, 'students.xlsx');
    }
}
