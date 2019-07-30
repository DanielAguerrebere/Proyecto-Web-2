@extends('master')
@section('content')
<style media="screen">
table, th, td {
    border: 1px solid gray;
    border-collapse: collapse;
}
</style>
      <div class="title m-b-md">
        Reservations
      </div>
      <br>
      <table style="width:100%">
        <thead>
          <th>id</th>
          <th>name</th>
          <th>category_id</th>
          <th>init_date</th>
          <th>final_date</th>
          <th>init_place</th>
          <th>final_place</th>
          <th>price</th>
          <th>extras</th>
        </thead>
        @foreach($reservations as $reservation)
        <tr>
          <td class="item"> {{$reservation->id}}</a> </td>
          <td class="item"> {{$reservation->name}}</a> </td>
          <td class="item"> {{$reservation->category_id}}</a> </td>
          <td class="item"> {{$reservation->init_date}}</a> </td>
          <td class="item"> {{$reservation->final_date}}</a> </td>
          <td class="item"> {{$reservation->init_place}}</a> </td>
          <td class="item"> {{$reservation->final_place}}</a> </td>
          <td class="item"> {{$reservation->price}}</a> </td>
          @foreach($reservation->extras as $extra)
            <td class="item"> {{$extra->name}}</a> </td>
          @endforeach
        </tr>
        @endforeach
      </table>
@endsection
