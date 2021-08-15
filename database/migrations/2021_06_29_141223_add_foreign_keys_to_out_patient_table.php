<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOutPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('out_patient', function (Blueprint $table) {
            $table->foreign('patient_id', 'out_patient_ibfk_1')->references('patient_id')->on('patient')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('out_patient', function (Blueprint $table) {
            $table->dropForeign('out_patient_ibfk_1');
        });
    }
}
