<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply', function (Blueprint $table) {
            $table->integer('supply_number')->primary();
            $table->string('supply_name', 10);
            $table->string('description', 50);
            $table->string('type', 10);
            $table->string('dosage', 10);
            $table->string('method_of_admin', 10);
            $table->integer('quantity_in_stock');
            $table->integer('reorder_level');
            $table->integer('cos_per_unit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply');
    }
}
