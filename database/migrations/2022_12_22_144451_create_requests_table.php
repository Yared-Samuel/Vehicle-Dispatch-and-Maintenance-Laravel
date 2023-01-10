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
            $table->foreignId('vcl_id')->constrained('vcls','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('maintenancetype_id')->constrained('maintenancetypes','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->longText('description');
            $table->boolean('status')->default(true);
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
