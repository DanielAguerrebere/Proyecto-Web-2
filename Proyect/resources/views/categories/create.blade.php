<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Car</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

</body>
</html>

@extends('master')
@section('content')
    <form action="/categories/store" method="post" class="mx-4 my-4">
      {{ csrf_field() }}
      <label for="name">Name</label>
      <input id="name" type="text" name="name">

      <label for="passengers">Passengers</label>
      <input id="passengers" type="text" name="passengers">

      <label for="cost">Cost</label>
      <input id="cost" type="text" name="cost">

      <label for="location">Location</label>
        @foreach($locations as $location)
        <input type="checkbox" name="location[]"value="{{$location->id}}" checked="checked">{{$location->ciudad}}
        @endforeach
      <br>

      <button type="submit" class="btn btn-success mx-4 my-4">ADD</button>
    </form>
@endsection
