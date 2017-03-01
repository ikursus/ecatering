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
      // Sample data user 1
      DB::table('users')->insert([
          'name' => 'John Doe',
          'email' => 'johndoe@gmail.com',
          'password' => bcrypt('johndoe'),
          'address' => 'Presint 16',
          'role' => 'admin',
          'phone' => '012-3456789'
      ]);
      // Sample data user 2
      DB::table('users')->insert([
          'name' => 'Michael Ang',
          'email' => 'michaelang@gmail.com',
          'password' => bcrypt('michaelang'),
          'address' => 'Presint 16',
          'role' => 'user',
          'phone' => '012-3456789'
      ]);
      // Sample data user 3
      DB::table('users')->insert([
          'name' => 'Ahmad Albab',
          'email' => 'ahmadalbab@gmail.com',
          'password' => bcrypt('ahmadalbab'),
          'address' => 'Presint 16',
          'role' => 'admin',
          'phone' => '012-3456789'
      ]);
      // Sample data user 4
      DB::table('users')->insert([
          'name' => 'Ali Baba',
          'email' => 'alibaba@gmail.com',
          'password' => bcrypt('alibaba'),
          'address' => 'Presint 16',
          'role' => 'user',
          'phone' => '012-3456789'
      ]);
    }
}
