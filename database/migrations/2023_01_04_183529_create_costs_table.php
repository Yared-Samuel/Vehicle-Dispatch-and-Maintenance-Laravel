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
            $table->string('spare_cost_desc')->nullable();
            $table->integer('spare_cost')->nullable();
            $table->integer('spare_qty')->nullable();
            $table->string('mech_cost_desc')->nullable();
            $table->integer('mech_cost')->nullable();
            $table->string('other_cost_desc')->nullable();
            $table->integer('other_cost')->nullable();
            $table->integer('ref_no');
            $table->foreignId('requester_id')->nullable()->constrained('requesters','id');
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
