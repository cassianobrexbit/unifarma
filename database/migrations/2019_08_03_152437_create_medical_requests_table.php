<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reg_number');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');
            $table->string('client_cellphone');
            $table->string('status');
            $table->string('val_date')->nullable();
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
        Schema::dropIfExists('medical_requests');
    }
}
