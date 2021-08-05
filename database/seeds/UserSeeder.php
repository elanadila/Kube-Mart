<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
          'id' => 1,
          'name' => 'Ela Nadila' ,
          'email' => 'ela@mail.com',
          'password' => bcrypt('12345'),
          'phone' => '081234567',
          'address' => 'Sukapura telkom university',
          'role' => \App\User::ROLE_SELLER,
          'photo' => null,
          'store_id' => 2,
        ],
        [
          'id' => 2,
          'name' => 'Meta' ,
          'email' => 'meta@mail.com',
          'password' => bcrypt('54321'),
          'phone' => '087654321',
          'address' => 'Sukabirus telkom university',
          'role' => \App\User::ROLE_CUSTOMER,
          'photo' => null,
          'store_id' => 3,
        ],
        [
          'id' => 3,
          'name' => 'Shantika' ,
          'email' => 'shantika@mail.com',
          'password' => bcrypt('54321'),
          'phone' => '0834343434',
          'address' => 'Jalan Radio telkom university',
          'role' => \App\User::ROLE_SELLER,
          'photo' => null,
          'store_id' => 1,
        ],
        [
          'id' => 4,
          'name' => 'Admin Utama' ,
          'email' => 'admin@mail.com',
          'password' => bcrypt('qwerty'),
          'phone' => '08989898989',
          'address' => 'Bojong Soang telkom university',
          'role' => \App\User::ROLE_ADMIN,
          'photo' => null,
          'store_id' => 4,
        ],
      ]);
    }
}
