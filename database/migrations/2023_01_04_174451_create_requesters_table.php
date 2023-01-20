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
        Schema::create('requesters', function (Blueprint $table) {
            // Request Form
            $table->id();
            $table->dateTime('request_date');            
            $table->string('request_by');
            $table->longText('description');
            $table->foreignId('vcl_id')->constrained('vcls','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('mtn_type');          
            $table->smallInteger('status')->default("1");

            //on maintenance

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->bigInteger('kilometer')->nullable()->default(0001);
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
        Schema::dropIfExists('requesters');
    }
};
