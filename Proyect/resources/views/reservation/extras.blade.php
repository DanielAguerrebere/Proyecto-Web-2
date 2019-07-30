<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Extra</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

</body>
</html>
@extends('master')
@section('content')
    <form action="{{route('reservations.check')}}" method="post" class="mx-4 my-4">
      {{ csrf_field() }}
      <h1 class="h3">Extras</h1>

      <input type="hidden" name="start" value="{{$start}}">
      <input type="hidden" name="end" value="{{$end}}">
      <input type="hidden" name="location_start" value="{{$location_start}}">
      <input type="hidden" name="location_end" value="{{$location_end}}">
      <input type="hidden" name="category_id" value="{{$category_id}}">
      @foreach($extras as $extra)
      <label for="{{$extra->id}}">{{$extra->name}} ${{$extra->cost}}</label>
      <input type="checkbox" name="extras[]" value="{{$extra->id}}">
      @endforeach
      <button class="btn btn-success" type="submit" name="button">Add Extra</button>
    </form>
@endsection
