<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = ["name", "email", "gender", "dateBirth", "idClass"];

    public $timestamps = false;

    // Cú pháp: bắt đầu bằng get, kết thúc bằng attribute
    public function getGenderNameAttribute()
    {
        if ($this->gender == 1) {
            return "Nam";
        } else {
            return "Nữ";
        }
    }
}
