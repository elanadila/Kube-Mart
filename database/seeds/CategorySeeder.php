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
            'name' => 'Agriculture'
          ],
          [
            'id' => 2,
            'name' => 'Food'
          ],
          [
            'id' => 3,
            'name' => 'Souvenir'
          ],
          [
            'id' => 4,
            'name' => 'Farm'
          ],
          [
            'id' => 5,
            'name' => 'Craft'
          ],
          [
            'id' => 6,
            'name' => 'Art'
          ],
        ]);
    }
}
