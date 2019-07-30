<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('cars')->insert([
             'make' => 'Mercedez',
             'model' =>'Clase A',
             'year' => 2017,
             'category_id' => 1,
         ]);
         DB::table('cars')->insert([
             'make' => 'BMW',
             'model' =>'modelo BMW',
             'year' => 2019,
             'category_id' => 2,
         ]);
         DB::table('cars')->insert([
             'make' => 'Honda',
             'model' =>'Civic',
             'year' => 2015,
             'category_id' => 3,
         ]);
     }
 }
