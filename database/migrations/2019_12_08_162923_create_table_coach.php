<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCoach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_coach', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable();
            $table->string('job')->nullable();
            $table->string('type_sport')->nullable();
            $table->string('year')->nullable();
            $table->string('number_cert')->nullable();
            $table->string('validate')->nullable();
            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('result')->nullable();
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
        Schema::dropIfExists('table_coach');
    }
}
