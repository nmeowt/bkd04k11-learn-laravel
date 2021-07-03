<?php

namespace App\Exports;

use App\Models\Classroom;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentsExport implements FromCollection, WithHeadings, WithMapping
{

    public function map($student): array
    {
        $date = date_create($student->dateBirth);
        $data =  [
            $student->id,
            $student->name,
            $student->email,
            $student->gender == 1 ? "Nam" : "Nữ",
            date_format($date, "d/m/Y"),
            Classroom::where("id", $student->idClass)->value("name"),
        ];
        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'Họ Tên',
            'Email',
            'Giới tính',
            'Ngày sinh',
            'Lớp'
        ];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Student::all();
    }
}
