<?php

use Illuminate\Database\Seeder;

class CategoryLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('category_location')->insert([
          'category_id' => 1,
          'location_id' => 1,
      ]);
      DB::table('category_location')->insert([
          'category_id' => 2,
          'location_id' => 2,
      ]);
      DB::table('category_location')->insert([
          'category_id' => 3,
          'location_id' => 3,
      ]);
    }
}
