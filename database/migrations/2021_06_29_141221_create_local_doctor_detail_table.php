<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalDoctorDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_doctor_detail', function (Blueprint $table) {
            $table->integer('ldoctor_ID', true);
            $table->string('ldoctor_fname', 50);
            $table->string('ldoctor_mname', 50);
            $table->string('ldoctor_lname', 50);
            $table->string('address', 50);
            $table->integer('clinic_num');
            $table->integer('telephone_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('local_doctor_detail');
    }
}
