<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('img');
            $table->string('describe');
            $table->string('link');
            $table->string('lat');
            $table->string('lng');
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
        Schema::dropIfExists('tets');
    }
}
