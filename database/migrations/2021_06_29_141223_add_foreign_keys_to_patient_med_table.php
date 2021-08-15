<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPatientMedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_med', function (Blueprint $table) {
            $table->foreign('ward_number', 'patient_med_ibfk_1')->references('ward_number')->on('ward')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('patient_id', 'patient_med_ibfk_2')->references('patient_id')->on('patient')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_med', function (Blueprint $table) {
            $table->dropForeign('patient_med_ibfk_1');
            $table->dropForeign('patient_med_ibfk_2');
        });
    }
}
