<?php

use Illuminate\Database\Seeder;

class CategoryStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories_store')->insert([
        [
          'id' => 1,
          'name' => 'Produksi Sumber Vitamin & Mineral (Sayuran)'
        ],
        [
          'id' => 2,
          'name' => 'Produksi Sumber Vitamin & Mineral (Buah Buahan)'
        ],
        [
          'id' => 3,
          'name' => 'Produksi Sumber Karbohidrat'
        ],
        [
          'id' => 4,
          'name' => 'Produksi Sumber Protein'
        ],
        [
          'id' => 5,
          'name' => 'Sembako kebutuhan sehari2'
        ],
      ]);
    }
}
