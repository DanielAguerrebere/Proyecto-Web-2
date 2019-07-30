<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Make Reservation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

</body>
</html>
@extends('master')
@section('content')

  <button onclick="newForm()" class="btn btn-primary mx-4 mt-4">New Reservation</button><br>

  <script>
    function newForm() {
      var x = document.getElementById("newReservation");
      if (x.style.display === "none"){
        x.style.display = "block";
      }
      else {
        x.style.display = "none"
      }
    }
    function oldForm() {
      var x = document.getElementById("oldReservation");
      if (x.style.display === "none"){
        x.style.display = "block";
      }
      else {
        x.style.display = "none"
      }
    }
  </script>

    <form action="{{route('reservations.categories')}}" method="post" class="mx-4 my-4" id="newReservation" style="display: none">
      {{ csrf_field() }}

      <div class="form-row">
        <div class="form-grup col-md-3">
          <label for="location_start">location start</label>
          <select id="location_start" name="location_start">
            @foreach($locations as $location)
              <option value="{{$location->id}}">{{$location->ciudad}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group col-md-3">
          <label for="location_end">location end</label>
          <select id="location_end" name="location_end">
            @foreach($locations as $location)
              <option value="{{$location->id}}">{{$location->ciudad}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-grup col-md-3">
          <label for="start">Start</label>
          <input id="start" type="date" name="start" required>
        </div>

        <div class="form-grup col-md-3">
          <label for="end">Return</label>
          <input id="end" type="date" name="end" required>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">GO</button>
    </form>

    <button onclick="oldForm()" class="btn btn-success mx-4 my-4">Check Reservation</button>

    <form action="{{route('reservations.checkReservation')}}" method="post" class="mx-4 my-4" id="oldReservation" style="display: none">
      {{ csrf_field() }}
      <label for="id_check">Id reservation</label>
      <input type="text" name="id_check" required>
      <label for="name">Name</label>
      <input type="text" name="name" required>
      <button type="submit" name="button" class="btn btn-success"> Check reservation</button>
    </form>
@endsection
