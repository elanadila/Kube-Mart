<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('stores')->insert([
        [
          'id' => 1,
          'name' => 'Toko Ucok',
          'address' => 'Buah Batu',
          'phone' => '0814045',
          'description' => 'Toko Kelontong di sukabirus',
          'langitude' => '-6.975353',
          'longitude' => '107.629601',
          'category_store_id' => 5
        ],
        [
          'id' => 2,
          'name' => 'Rumah Buah Tirtayasa',
          'address' => 'Jl. Sultan Tirtayasa No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40116',
          'phone' => '0814022',
          'description' => 'Toko buah terlengkap Bandung Raya',
          'langitude' => '-6.8976',
          'longitude' => '107.634',
          'category_store_id' => 2
        ],
      ]);
    }
}
