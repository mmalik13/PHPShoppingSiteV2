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
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt(123),
        ]);

        DB::table('users')->insert([
            'name'=>'test user',
            'email'=>'testuser@gmail.com',
            'password'=>bcrypt(123),
        ]);
    }
}
