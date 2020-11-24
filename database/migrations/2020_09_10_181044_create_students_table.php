<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('students', function (Blueprint $table) {
            $table->id();
            $table->double('iin')->default(0);
            $table->string('fullname')->nullable();
            $table->double('category_id')->default(0);
            $table->double('male_id')->default(0);
            $table->string('lang')->nullable();
            $table->text('image')->nullable();
            $table->text('status')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
}
