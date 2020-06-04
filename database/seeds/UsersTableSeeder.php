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
        DB::table('users')->insert([
            'name' => 'Administrador',
            'username' => 'admin',
            'email' => 'alfonzodiez@gmail.com',
            'password' => bcrypt('admin'),
            'isAdmin' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Carlos',
            'username' => 'carloslsf',
            'email' => 'carlossierralsf@gmail.com',
            'isAdmin' => '1',
            'password' => bcrypt('123456'),
        ]);
    }
}
