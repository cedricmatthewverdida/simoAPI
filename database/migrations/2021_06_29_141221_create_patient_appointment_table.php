<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_appointment', function (Blueprint $table) {
            $table->integer('patient_apt_id', true);
            $table->integer('staff_id')->index('staff_id');
            $table->integer('patient_id')->index('patient_id');
            $table->dateTime('date_time');
            $table->string('room', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_appointment');
    }
}
