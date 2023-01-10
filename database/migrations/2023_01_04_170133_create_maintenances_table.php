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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->bigInteger('kilometer')->default(0001);
            $table->longText('mech_work_desc');
            $table->integer('mech_cost');
            $table->bigInteger('spare_description')->nullable();
            $table->foreignId('sparepart_id')->constrained('spareparts','id');
            $table->foreignId('request_id')->constrained('requests','id');
            
                    
                     

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
        Schema::dropIfExists('maintenances');
    }
};
