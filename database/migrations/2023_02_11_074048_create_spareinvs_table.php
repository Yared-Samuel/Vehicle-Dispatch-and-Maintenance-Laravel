<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spareinvs', function (Blueprint $table) {
            $table->id();
            $table->date('date_in');
            $table->integer('serial')->nullable();
            $table->string('spare_name');
            $table->string('spare_model');
            $table->string('spare_type');
            $table->integer('qty_in');
            $table->string('unit');
            $table->integer('price_in');
            $table->smallInteger('created_by');
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
        Schema::dropIfExists('spareinvs');
    }
};
