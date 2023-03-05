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
        if (!Schema::hasTable('vcls')) {
        Schema::create('vcls', function (Blueprint $table) {
            $table->id();
            $table->string('plate_id');            
            $table->integer('plate_code');

            $table->string('plate_city');            
            $table->string('chassis_number')->nullable()->default(null);

            $table->string('motor_number')->nullable()->default(null);            
            $table->string('vcl_model')->nullable()->default(null);
            
            $table->string('fuel_type');
            $table->string('category_name');

            $table->date('purchase_date')->default(null)->nullable();
            $table->date('manufacture_date')->default(null)->nullable();
            $table->string('image');
            $table->smallInteger('created_by');
            $table->timestamps();
        
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vcls');
    }
};
