<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardRequisitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward_requisition', function (Blueprint $table) {
            $table->integer('ward_req_number', true);
            $table->integer('ward_number')->index('ward_number');
            $table->integer('quantity_req');
            $table->date('date_requested');
            $table->string('status', 10);
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
        Schema::dropIfExists('ward_requisition');
    }
}
