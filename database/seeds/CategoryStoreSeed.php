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
            ['name' => 'UKM Pangan'],
            ['name' => 'UKM Pertanian'],
            ['name' => 'UKM Kerajinan'],
            ['name' => 'UKM Peternakan'],
            ['name' => 'UKM Kesenian'],
            ['name' => 'UKM Rekreasi'],
        ]);

        
    }
}
