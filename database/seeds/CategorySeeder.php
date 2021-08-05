<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
          [
            'id' => 1,
            'name' => 'Makanan'
          ],
          [
            'id' => 2,
            'name' => 'Obat Obatan'
          ],
          [
            'id' => 3,
            'name' => 'Minuman & Jamu'
          ],
          [
            'id' => 4,
            'name' => 'Lifestyle'
          ],
        ]);
    }
}
