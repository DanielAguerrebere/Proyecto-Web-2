<?php

use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('extras')->insert([
           'name' => 'silla de bebe',
           'cost' =>  100,
         ]);
       DB::table('extras')->insert([
           'name' => 'seguro basico',
           'cost' =>  60,
         ]);
       DB::table('extras')->insert([
           'name' => 'gato hidraulico',
           'cost' =>  10,
         ]);
     }
 }
