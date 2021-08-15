<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->integer('staff_id', true);
            $table->string('staff_fname', 50);
            $table->string('staff_mname', 50);
            $table->string('staff_lname', 50);
            $table->string('full_address', 100);
            $table->integer('telephone_number');
            $table->date('date_of_birth');
            $table->string('sex', 2);
            $table->string('nin', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
