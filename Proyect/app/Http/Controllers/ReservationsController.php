<?php

namespace App\Http\Controllers;
use \App\Category;
use \App\Location;
use \App\Reservation;
use \App\Extra;
use Stripe\Stripe;
use Validator;
use DateTime;
use App\Http\Requests\ListAvailableCategoriesRequest;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
  public function index()
  {
    return view('Reservation.index');
  }

  public function client()
  {
    $locations = Location::all();
    return view('Reservation.client')->with('locations',$locations);;
  }

  public function categories(ListAvailableCategoriesRequest $request)
  {
      $categories = Location::find($request['location_start'])->categories;
      return view('Reservation.categories')->with('categories',$categories)->with(
        'location_start',$request['location_start'])->with(
        'location_end',$request['location_end'])->with(
        'start',$request['start'])->with(
        'end',$request['end']);
  }
  public function check(Request $request)
  {
      $extras = [];
      $total_extra = 0;
      if(isset($request['extras']))
      {
        foreach ($request['extras'] as $extra)
        {
          $extra_temp = Extra::find($extra);
          array_push ($extras ,$extra_temp);
          $total_extra += $extra_temp->cost;
        }
      }

      $location_start = Location::find($request['location_start']);
      $location_end = Location::find($request['location_end']);
      $category = Category::find($request['category_id']);
      $start = new DateTime($request['start']);
      $end = new DateTime($request['end']);
      $days = date_diff($start, $end)->days;

      $price = $days * ($total_extra + $category->cost);
      return view('Reservation.check')->with('category',$category)->with(
        'location_start',$location_start)->with(
        'location_end',$location_end)->with(
        'start',$request['start'])->with(
        'end',$request['end'])->with(
        'price',$price)->with(
        'extras',$extras);
  }
  public function checkReservation(Request $request)
  {

    if($request['id_check'] != 0)
    {
      $reservation = Reservation::find($request['id_check']);
      if($reservation->name == $request['name'])
      {
        $location_start = Location::find($reservation->init_place);
        $location_end = Location::find($reservation->final_place);
        $category = Category::find($reservation->category_id);
        return view('Reservation.checkReservation')->with('category',$reservation->category_id)->with(
          'location_start',$location_start)->with(
          'location_end',$location_end)->with(
          'start',$reservation->init_date)->with(
          'end',$reservation->end_date)->with(
          'reservation',$reservation)->with(
          'name',$reservation->name)->with(
          'price',$reservation->price)->with(
          'extras',$reservation->extras)->with(
          'category',$category);
      }
      else
      {
        return redirect()->route('reservations.client');
      }
     }
  }
  public function makeReservation(Request $request)
  {
    // Set your secret key: remember to change this to your live secret key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    \Stripe\Stripe::setApiKey('sk_test_Svkur5SOXoYBHI4AByFEurNz00T7blpWFe');

    // Token is created using Checkout or Elements!
    // Get the payment token ID submitted by the form:
    $token = $request['stripeToken'];
    $charge = \Stripe\Charge::create([
      'amount' => $request['price'] * 100,
      'currency' => 'mxn',
      'description' => 'Reservation',
      'source' => $token,
    ]);

      $category = Category::find($request['category_id']);

      $reservation = Reservation::create([
          'name' => $request['name'],
          'category_id' => $request['category_id'],
          'init_place' => $request['location_start'],
          'final_place' => $request['location_end'],
          'init_date' => $request['start'],
          'final_date' => $request['end'],
          'price' => $request['price'],
      ]);

      $extras = [];
      if(isset($request['extras']))
      {
        foreach ($request['extras'] as $extra_temp)
        {
          $reservation->extras()->attach([$extra_temp]);
          $extra = Extra::find($extra_temp);
          array_push ($extras ,$extra);
        }
      }

      $location_start = Location::find($request['location_start']);
      $location_end = Location::find($request['location_end']);
      return view('Reservation.makeReservation')->with('category',$category)->with(
        'location_start',$location_start)->with(
        'location_end',$location_end)->with(
        'start',$request['start'])->with(
        'end',$request['end'])->with(
        'reservation',$reservation)->with(
        'name',$request['name'])->with(
        'price',$request['price'])->with(
        'extras',$extras);

  }

  public function extras(Request $request)
  {

    $extras = Extra::all();

    return view('Reservation.extras')->with('extras',$extras)->with(
      'location_start',$request['location_start'])->with(
      'location_end',$request['location_end'])->with(
      'start',$request['start'])->with(
      'end',$request['end'])->with(
      'name',$request['name'])->with(
      'category_id',$request['category_id']);
  }
}
