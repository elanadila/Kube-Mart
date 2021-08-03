<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryStoreSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_store')->insert([
            ['name' => 'Produksi Sumber Vitamin & Mineral (Sayuran)'],
            ['name' => 'Produksi Sumber Vitamin & Mineral (Buah Buahan)'],
            ['name' => 'Produksi Sumber Karbohidrat'],
            ['name' => 'Produksi Sumber Protein'],
        ]);

        
    }
}
