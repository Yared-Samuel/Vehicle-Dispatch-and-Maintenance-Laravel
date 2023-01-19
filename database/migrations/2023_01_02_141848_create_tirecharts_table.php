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
        Schema::create('tirecharts', function (Blueprint $table) {
            $table->id();
            $table->integer('serial_num')->unsigned();
            $table->smallInteger('status');
            $table->string('tire_type');
            $table->string('tire_price');
            $table->date('start')->nullable();
            $table->foreignId('vcl_id')->nullable()->constrained('vcls','id');
            $table->foreignId('driver_id')->nullable()->constrained('drivers','id');
            $table->integer('category_id');            
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
        Schema::dropIfExists('tirecharts');
    }
};
