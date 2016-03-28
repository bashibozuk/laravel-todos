<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('tags')->insert([
            'name' => 'Important',
        ]);
        
        \Illuminate\Support\Facades\DB::table('tags')->insert([
           'name' => 'Urgent'
        ]);
        
        \Illuminate\Support\Facades\DB::table('tags')->insert([
            'name' => 'Low Priority'
        ]);
        
        \Illuminate\Support\Facades\DB::table('tags')->insert([
           'name' => 'Family'
        ]);
        
        \Illuminate\Support\Facades\DB::table('tags')->insert([
            'name' => 'Work'
        ]);

        \Illuminate\Support\Facades\DB::table('tag_todo')->insert([
            'tag_id' => 1,
            'todo_id' => 1,
        ]);
        
        \Illuminate\Support\Facades\DB::table('tag_todo')->insert([
            'tag_id' => 4,
            'todo_id' => 1,
        ]);
        
        \Illuminate\Support\Facades\DB::table('tag_todo')->insert([
            'tag_id' => 1,
            'todo_id' => 2,
        ]);
        \Illuminate\Support\Facades\DB::table('tag_todo')->insert([
            'tag_id' => 4,
            'todo_id' => 2,
        ]);
    }
}
