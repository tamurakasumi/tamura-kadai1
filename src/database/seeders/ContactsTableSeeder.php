<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'last_name' => '山田',
        'first_name' => '太郎',
        'gender' => '1',
        'email' => 'test1@example.com',
        'tel' => '08012345678',
        'address' => 'test1@example.com',
        'building' => '千駄ヶ谷マンション101',
        'detail' => ''


    ];
    DB::table('authors')->insert($param);
    $param = [
      'name' => 'jack',
      'age' => 20,
      'nationality' => 'British'
    ];
    DB::table('authors')->insert($param);
    $param = [
      'name' => 'sara',
      'age' => 45,
      'nationality' => 'Egyptian'
    ];
    DB::table('authors')->insert($param);
    $param = [
      'name' => 'saly',
      'age' => 31,
      'nationality' => 'Chinese'
    ];
    DB::table('authors')->insert($param);
    }
}
