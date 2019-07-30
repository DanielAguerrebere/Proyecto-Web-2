<?php

use Illuminate\Database\Seeder;

class ReservationExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('extra_reservation')->insert([
          'reservation_id' => 1,
          'extra_id' => 1,
      ]);
      DB::table('extra_reservation')->insert([
          'reservation_id' => 2,
          'extra_id' => 2,
      ]);
      DB::table('extra_reservation')->insert([
          'reservation_id' => 3,
          'extra_id' => 3,
      ]);
    }
}
