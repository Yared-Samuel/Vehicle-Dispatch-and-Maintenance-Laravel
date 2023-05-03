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
            $table->string('GRN_ref');
            $table->date('date_in');
            $table->string('serial')->nullable();
            $table->foreignId('item_id')->constrained('items','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('model')->nullable();
            $table->integer('qty_in');
            $table->integer('price_in');
            $table->integer('total_price');
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
