<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffWorkExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_work_experience', function (Blueprint $table) {
            $table->integer('staff_we_id');
            $table->integer('staff_id')->index('staff_id');
            $table->index(['staff_we_id', 'staff_id'], 'staff_we_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_work_experience');
    }
}
