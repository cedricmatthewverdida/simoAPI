<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientNokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_nok', function (Blueprint $table) {
            $table->integer('nok_id', true);
            $table->string('nok_fname', 50);
            $table->string('nok_mname', 50);
            $table->string('nok_lname', 50);
            $table->string('relationship', 50);
            $table->string('address', 100);
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
        Schema::dropIfExists('patient_nok');
    }
}
