<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Todos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        \Illuminate\Support\Facades\Schema::create('todos', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->string('text', 500);
            //Adds created_at and updated_at columns.
            $table->timestamps();
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        \Illuminate\Support\Facades\Schema::drop('todos');
    }
}
