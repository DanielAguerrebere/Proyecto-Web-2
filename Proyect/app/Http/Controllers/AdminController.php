<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Reservation;
use \App\Category;
use \App\Location;

class AdminController extends Controller
{
  public function index()
  {
    return view('admin.index');
  }

  public function menu()
  {
     return view('admin.menu');
  }
  public function getReservations()
  {
    $reservations = Reservation::all();
    foreach ($reservations as $reservation)
    {
      $reservation->category_id = Category::find($reservation->category_id)->name;
      $reservation->init_place = Location::find($reservation->init_place)->ciudad;
      $reservation->final_place = Location::find($reservation->final_place)->ciudad;
    }
    return view('admin.reservations')->with('reservations',$reservations);
  }
}
