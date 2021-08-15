<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_detail', function (Blueprint $table) {
            $table->integer('in_patient_id');
            $table->integer('staff_id')->index('staff_id');
            $table->string('status', 10);
            $table->index(['in_patient_id', 'staff_id'], 'in_patient_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_detail');
    }
}
