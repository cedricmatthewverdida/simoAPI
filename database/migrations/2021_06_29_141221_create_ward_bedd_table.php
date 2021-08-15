<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardBeddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward_bedd', function (Blueprint $table) {
            $table->integer('ward_number');
            $table->integer('ward_bed_num');
            $table->string('status', 50);
            $table->unique(['ward_number', 'ward_bed_num'], 'ward_bed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ward_bedd');
    }
}
