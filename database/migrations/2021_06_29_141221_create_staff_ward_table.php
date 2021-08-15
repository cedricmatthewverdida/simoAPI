<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffWardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_ward', function (Blueprint $table) {
            $table->integer('ward_number');
            $table->integer('staff_id')->index('staff_id');
            $table->date('date_assigned');
            $table->index(['ward_number', 'staff_id'], 'ward_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_ward');
    }
}
