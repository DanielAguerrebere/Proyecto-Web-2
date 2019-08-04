@extends('master')
@section('content')

      <br>
      <table class="table">
        <thead>
        <tr>
            <th scope="col">R. Number</th>
            <th scope="col">Action</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">initial date</th>
            <th scope="col">final date</th>
            <th scope="col">initial place</th>
            <th scope="col">final place</th>
            <th scope="col">price</th>
            <th scope="col">extras</th>
        </tr>
        </thead>
        @foreach($reservations as $reservation)
        <tr>
          <td> {{$reservation->id}} </td>
          <td>
              <form action="<?php echo "http://localhost:8000/delete/"?>{{$reservation->id}}" class="my-1">
                  <button class="btn btn-danger mx-1" type="submit">
                      DELETE
                  </button>
              </form>
          </td>
          <td> {{$reservation->name}} </td>
          <td> {{$reservation->category_id}} </td>
          <td> {{$reservation->init_date}} </td>
          <td> {{$reservation->final_date}} </td>
          <td> {{$reservation->init_place}} </td>
          <td> {{$reservation->final_place}} </td>
          <td> {{$reservation->price}} </td>
          @foreach($reservation->extras as $extra)
            <td> {{$extra->name}} </td>
          @endforeach
        </tr>
        @endforeach
      </table>
@endsection
