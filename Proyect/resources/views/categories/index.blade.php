<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars for Rent</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

</body>
</html>
@extends('master')
@section('content')
    <h3 class="h3">Cars DB</h3>
      <table class="table mx-4 my-4">
        <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Cost</th>
          <th scope="col">Cities</th>
        </tr>
        </thead>
        <tbody>
          @foreach($categories as $c)
            <tr>
              <th scope="row" class="item"><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->id}}</a> </th>
              <td><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->name}}</a> </td>
              <td><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->cost}}</a> </td>
              @foreach($c->locations as $location)
              <td><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$location->ciudad}}</a> </td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
      <form action="<?php echo "http://localhost:8000/categories/create"?>">
          <button class="btn btn-success mx-4" type="submit">
              ADD
          </button>
      </form>

@endsection
