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
            $table->integer('use_qty');
            $table->foreignId('sparecharts_id')->constrained('sparecharts','id');
            $table->foreignId('vcl_id')->constrained('vcls','id');
            $table->foreignId('driver_id')->nullable()->constrained('drivers','id');
            $table->string('desc')->nullable();
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
