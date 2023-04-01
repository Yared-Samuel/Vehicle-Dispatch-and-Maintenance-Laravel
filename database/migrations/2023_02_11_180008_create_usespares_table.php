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
        Schema::create('usespares', function (Blueprint $table) {
            $table->id();   
            $table->date('use_date');
            $table->string('GIV_ref');         
            $table->foreignId('item_id')->constrained('items','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->integer('use_qty');
            $table->foreignId('vcl_id')->constrained('vcls','id');
            
            $table->foreignId('driver_id')->constrained('drivers','id');
            
            $table->integer('mileage')->nullable();
            $table->string('desc')->nullable();
            // status 1->on the truck 2-> Disposed
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('usespares');
    }
};
