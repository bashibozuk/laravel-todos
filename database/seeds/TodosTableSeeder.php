<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('todos')->insert([
            'user_id' => 1,
            'text' => 'Todo One',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Illuminate\Support\Facades\DB::table('todos')->insert([
            'user_id' => 1,
            'text' => 'Todo Two',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        \Illuminate\Support\Facades\DB::table('todos')->insert([
            'user_id' => 1,
            'text' => 'Todo Three',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
