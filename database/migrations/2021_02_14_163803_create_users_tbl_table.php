<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tbl', function (Blueprint $table) {
            $table->Increments('student_id');
            $table->string('student_name');
            $table->string('student_fathersname');
            $table->string('student_mothersname');
            $table->string('student_roll');
            $table->string('student_email');
            $table->string('student_phone');
            $table->string('student_address');
            $table->string('student_image');
            $table->string('student_deparment');
            $table->string('student_admissionyear');
            $table->string('student_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_tbl');
    }
}
