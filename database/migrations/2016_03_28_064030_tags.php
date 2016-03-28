<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Illuminate\Support\Facades\Schema::create('tags', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        \Illuminate\Support\Facades\Schema::create('tag_todo', function(Blueprint $table) {
            $table->integer('tag_id', false, true);
            $table->integer('todo_id', false, true);

            $table->primary(['tag_id', 'todo_id']);

            $table
                ->foreign('tag_id')
                ->references('id')
                ->on('tags');

            $table
                ->foreign('todo_id')
                ->references('id')
                ->on('todos');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Illuminate\Support\Facades\Schema::table('tag_todo', function(Blueprint $table) {
            $table->dropForeign('tags_todos_todo_id_foreign');
            $table->dropForeign('tags_todos_tag_id_foreign');
        });

        \Illuminate\Support\Facades\Schema::dropTable('tag_todo');
        \Illuminate\Support\Facades\Schema::dropTable('tags');
    }
}
