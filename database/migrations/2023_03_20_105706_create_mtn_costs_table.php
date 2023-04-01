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
        Schema::create('mtn_costs', function (Blueprint $table) {
            $table->id();
            // Request Form
            $table->foreignId('requester_id')->constrained('requesters','id');
            $table->foreignId('vcl_id')->constrained('vcls','id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->smallInteger('status')->default("1");
            $table->smallInteger('created_by');

            //Cost Form

            $table->foreignId('cost_id')->nullable()->constrained('costs','id');
            $table->date('cost_date')->nullable();
            $table->string('cost_desc')->nullable();
            $table->integer('cost_cash')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('total_cost')->nullable();
            $table->integer('ref_no')->nullable();
            $table->string('garage_name')->nullable();

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
        Schema::dropIfExists('mtn_costs');
    }
};
