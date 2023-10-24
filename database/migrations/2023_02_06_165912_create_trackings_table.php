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
        Schema::create('track', function (Blueprint $table) {
            $table->id('t_id');
            $table->string('t_number')->nullable();
            $table->string('t_city');
            $table->string('t_state');
            $table->string('t_status');
            $table->date('t_date');
            $table->date('t_ship');
            $table->string('d_zip');
            $table->integer('t_use');
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
        Schema::dropIfExists('track');
    }
};
