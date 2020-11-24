<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('books', function (Blueprint $table) {
            $table->id();
            $table->text('lview')->nullable();
            $table->text('sl')->nullable();
            $table->text('author')->nullable();
            $table->text('name')->nullable();
            $table->text('location')->nullable();
            $table->text('year')->nullable();
            $table->text('copies')->nullable();
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
        Schema::dropIfExists('books');
    }
}
