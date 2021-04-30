<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosAble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  //run migration
    {
        Schema::create('todos_able', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //undo migration
    {
        Schema::dropIfExists('todos_able');
    }
}
