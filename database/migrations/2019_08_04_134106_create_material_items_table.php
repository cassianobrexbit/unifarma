<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('available_status')->nullable();
            $table->string('valid_status')->nullable();
            $table->date('val_date')->nullable();
            $table->bigInteger('material_id');
            $table->string('nf_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_items');
    }
}
