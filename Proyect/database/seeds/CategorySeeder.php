<?php

use Illuminate\Database\Seeder;

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
          'name' => 'Cool',
          'passengers' =>'4',
          'cost' => 1000,
      ]);
      DB::table('categories')->insert([
          'name' => 'Pro',
          'passengers' =>'2',
          'cost' => 900,
      ]);
      DB::table('categories')->insert([
          'name' => 'Sport',
          'passengers' =>'4',
          'cost' => 1100,
      ]);
    }
}
