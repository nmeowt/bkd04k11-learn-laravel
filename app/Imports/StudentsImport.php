<?php

namespace App\Imports;

use App\Models\Classroom;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Chuỗi
        $date = str_replace("/", "-", $row["ngay_sinh"]);
        // Date excel => m/d/Y
        // $UNIX_DATE = ($row["ngay_sinh"] - 25569) * 86400;
        // $date_column = gmdate("Y-m-d", $UNIX_DATE);
        $data = [
            "name" => $row["ho_ten"],
            "email" => $row["email"],
            "gender" => $row["gioi_tinh"] == "Nam" ? 1 : 0,
            "dateBirth" => date("Y-m-d", strtotime($date)),
            "idClass" => Classroom::where('name', $row["lop"])->value("id"),
            // select ma from classroom where name = "bkd04k11" limit 1
        ];
        return new Student($data);
    }
}
