<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reservation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

</body>
</html>

@extends('master')
@section('content')
      <h1 class="h3 mx-4 my-4">Select a Car</h1>
      <table class="table mx-4 my-4">
        @foreach($categories as $c)
        <tr>
          <td scope="col">
            <form action="{{route('reservations.extras')}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="start" value="{{$start}}">
              <input type="hidden" name="end" value="{{$end}}">
              <input type="hidden" name="location_start" value="{{$location_start}}">
              <input type="hidden" name="location_end" value="{{$location_end}}">
              <input type="hidden" name="category_id" value="{{$c->id}}">
              <button class="btn btn-primary" type="submit" name="button{{$c->category_id}}">
                {{$c->name}} <span class="badge badge-light">${{$c->cost}}</span>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
@endsection
