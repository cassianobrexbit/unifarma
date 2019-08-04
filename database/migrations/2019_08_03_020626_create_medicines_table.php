<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tiss_code');
            $table->string('commercial_name',);
            $table->string('active_principle');
            $table->string('is_generic');
            $table->double('quantity')->default(0);
            $table->double('frac_qtd')->default(0);
            $table->string('is_frac')->default('N');
            $table->string('min_frac_unity');

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
        Schema::dropIfExists('medicines');
    }
}
