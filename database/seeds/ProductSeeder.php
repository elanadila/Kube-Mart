<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
        [
          'id' => 1,
          'name' => 'Semangka',
          'price' => '35000',
          'stock' => 12,
          'description' => 'Buah Semangka dari Majalengka',
          'photo' => null,
          'store_id' => 2,
          'user_id' => 1,
          'category_id' => 1,
        ],
        [
          'id' => 2,
          'name' => 'Jeruk',
          'price' => '35000',
          'stock' => 12,
          'description' => 'Buah Jeruk asli Palembang',
          'photo' => null,
          'store_id' => 2,
          'user_id' => 1,
          'category_id' => 1,
        ],
        [
          'id' => 3,
          'name' => 'isi Gas Melon LPG 3 Kg',
          'price' => '25000',
          'stock' => 12,
          'description' => 'isinya saja',
          'photo' => null,
          'store_id' => 1,
          'user_id' => 3,
          'category_id' => 1,
        ],
        [
          'id' => 4,
          'name' => 'Tabung + isi Gas Melon LPG 3 Kg',
          'price' => '150000',
          'stock' => 12,
          'description' => 'Tabung + isi termurah',
          'photo' => null,
          'store_id' => 1,
          'user_id' => 3,
          'category_id' => 1,
        ],
      ]);
    }
}
