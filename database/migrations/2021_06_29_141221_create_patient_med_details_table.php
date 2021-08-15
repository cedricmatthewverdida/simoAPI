<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientMedDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_med_details', function (Blueprint $table) {
            $table->integer('patient_med_id')->index('patient_med_id_2');
            $table->integer('supply_number')->index('patient_med_id');
            $table->integer('unit_per_day');
            $table->date('finish_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_med_details');
    }
}
