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
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id'); //auto increment every new line
            $table->string('name');
            $table->text('description');
            $table->boolean('completed');
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
        Schema::dropIfExists('todos_list');
        Schema::dropIfExists('todos');
    }
}
