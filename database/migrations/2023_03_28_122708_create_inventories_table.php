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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();

            // the two foreign tables
            
            

            // columns for spareinv
            
            $table->string('GRN_ref_inv')->nullable();

            // columns for usespare
            
            $table->string('GIV_ref_inv')->nullable();            
            $table->date('use_date')->nullable();            
            $table->integer('mileage')->nullable();
            $table->foreignId('vcl_id')->nullable()->constrained('vcls','id');
            $table->foreignId('driver_id')->nullable()->constrained('drivers','id');

            
            // for Both
            $table->string('type'); // values => received and issued
            $table->integer('quantity_inv'); // positive for received
            $table->foreignId('item_id')->constrained('items','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');    
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
        Schema::dropIfExists('inventories');
    }
};
