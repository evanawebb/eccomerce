<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('brand');
            $table->string('lotNumber');
            $table->string('imageString');
            $table->string('color');
            $table->string('gender');
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('pants');
    }
}