<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('locations')->insert([
          'ciudad' => 'Sahuayo',
          'is_airport' => false,
          'direccion' => 'La Mina #546',
      ]);
      DB::table('locations')->insert([
          'ciudad' => 'Guadalajara',
          'is_airport' => true,
          'direccion' => 'Abasolo #45',
      ]);
      DB::table('locations')->insert([
          'ciudad' => 'CDMX',
          'is_airport' => true,
          'direccion' => 'Quesadilla #345',
      ]);
    }
}
