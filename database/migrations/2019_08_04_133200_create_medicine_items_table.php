<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicineItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num_batch')->nullable();
            $table->string('available_status')->default('Pendente');
            $table->string('valid_status')->nullable();
            $table->date('val_date')->nullable();
            $table->bigInteger('medicine_id');
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
        Schema::dropIfExists('medicine_items');
    }
}
