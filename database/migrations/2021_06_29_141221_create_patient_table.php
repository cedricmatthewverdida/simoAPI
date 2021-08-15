<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->integer('patient_id', true);
            $table->string('patient_fname', 50);
            $table->string('patient_mname', 50);
            $table->string('patient_lname', 50);
            $table->string('address', 100);
            $table->integer('telephone_number');
            $table->date('date_of_birth');
            $table->string('sex', 6);
            $table->string('marital_status', 10);
            $table->date('date_registered');
            $table->integer('nok_id')->index('patient_nok_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');
    }
}
