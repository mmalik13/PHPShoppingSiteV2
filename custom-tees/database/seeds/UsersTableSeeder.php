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
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name'=>'Test User',
            'email'=>'testuser@gmail.com',
            'password'=>bcrypt(123),
        ]);
    }
}