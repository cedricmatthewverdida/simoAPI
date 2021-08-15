<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientMedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_med', function (Blueprint $table) {
            $table->integer('patient_med_id', true);
            $table->integer('ward_number')->index('ward_number');
            $table->integer('patient_id')->index('patient_id');
            $table->integer('supply_number')->index('supply_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_med');
    }
}
