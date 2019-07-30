<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reservations')->insert([
          'name' => 'Ivan',
          'category_id' => 1,
          'init_place' => 1,
          'final_place' => 1,
          'init_date' => '2019/01/01',
          'final_date' => '2019/02/01',
          'price' => 1000*10,
      ]);
      DB::table('reservations')->insert([
          'name' => 'Juan',
          'category_id' => 2,
          'init_place' => 2,
          'final_place' => 2,
          'init_date' => '2019/01/03',
          'final_date' => '2019/02/01',
          'price' => 1000*30,
      ]);
      DB::table('reservations')->insert([
          'name' => 'Pancho',
          'category_id' => 3,
          'init_place' => 3,
          'final_place' => 3,
          'init_date' => '2019/02/01',
          'final_date' => '2019/02/05',
          'price' => 1000*20,
      ]);
    }
}
