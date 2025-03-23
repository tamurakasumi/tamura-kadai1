<?php

namespace Database\Seeders;

use App\Models\Contact;
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
        'address' => '東京都渋谷区千駄ヶ谷千駄ヶ谷1-2-3',
        'building' => '千駄ヶ谷マンション101',
        'category_id' =>'商品の交換について',
        'detail' => '届いた商品が注文とは別のものが来た。商品を交換して欲しい。'
    ];
    DB::table('contact')->insert($param);
    }
}
