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
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->date('cost_date');
            $table->string('cost_desc')->nullable();
            $table->integer('cost_cash')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('total_cost')->nullable();            
            $table->integer('ref_no')->nullable();
            $table->string('garage_name')->nullable();
            $table->foreignId('driver_id')->nullable()->constrained('drivers','id');
            $table->foreignId('requester_id')->nullable()->constrained('requesters','id');
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
        Schema::dropIfExists('costs');
    }
};
