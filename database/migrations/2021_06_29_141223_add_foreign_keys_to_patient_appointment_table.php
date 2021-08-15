<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPatientAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_appointment', function (Blueprint $table) {
            $table->foreign('patient_id', 'patient_appointment_ibfk_1')->references('patient_id')->on('patient')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('staff_id', 'patient_appointment_ibfk_2')->references('staff_id')->on('staff')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_appointment', function (Blueprint $table) {
            $table->dropForeign('patient_appointment_ibfk_1');
            $table->dropForeign('patient_appointment_ibfk_2');
        });
    }
}
