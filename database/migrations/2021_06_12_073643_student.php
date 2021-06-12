<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tạo table
        Schema::create('student', function (Blueprint $table) {
            $table->id(); # vừa là primary key vừa tự động tăng
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->boolean('gender');
            $table->date('dateBirth');
            $table->unsignedBigInteger('idClass');
            $table->foreign('idClass')->references('id')->on('classroom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Xóa table
        Schema::dropIfExists('student');
    }
}
