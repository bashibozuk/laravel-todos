<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Test Test',
            'email' => 'test.test@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        echo 'One user inserted', PHP_EOL;
    }
}
