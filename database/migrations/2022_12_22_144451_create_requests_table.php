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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->dateTime('request_date');            
            $table->string('request_by');
            $table->longText('description');
            $table->foreignId('vcl_id')->constrained('vcls','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('maintenancetype_id')->constrained('maintenancetypes','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            
            $table->smallInteger('status')->default("1");
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
        Schema::dropIfExists('requests');
    }
};
