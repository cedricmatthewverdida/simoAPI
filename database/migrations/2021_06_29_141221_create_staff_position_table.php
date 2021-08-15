<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_position', function (Blueprint $table) {
            $table->integer('staff_position_id', true);
            $table->integer('staff_id')->index('staff_id');
            $table->string('staff_description', 50);
            $table->integer('current_salary');
            $table->string('salary_scale', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_position');
    }
}
