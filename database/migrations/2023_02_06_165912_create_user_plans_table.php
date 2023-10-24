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
        Schema::create('user_plan', function (Blueprint $table) {
            $table->id('up_id');
            $table->id('u_id');
            $table->integer('p_id')->nullable();
            $table->dateTime('issue_date');
            $table->dateTime('expire_date');
            $table->string('status');
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
        Schema::dropIfExists('user_plan');
        Schema::table('user_plan', function($table) {
            $table->integer('count')->after('status');
        });
    }
};
