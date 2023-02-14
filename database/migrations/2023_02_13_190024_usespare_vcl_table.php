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
        Schema::create('usespare_vcl', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usespare_id')->constrained('usespare','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('vcl_id')->constrained('vcls','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usespare_vcl');
    }
};
