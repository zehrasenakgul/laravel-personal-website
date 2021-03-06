<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Sabit ve default değerler için seeder kullanıyoruz.
     *
     * @return void
     */
    public function run()
    { 
      DB::table('users')->insert([
          "name" => "deneme",
          "email" => "deneme@gmail.com",
          "password" => bcrypt("deneme")
      ]);
    }
}
