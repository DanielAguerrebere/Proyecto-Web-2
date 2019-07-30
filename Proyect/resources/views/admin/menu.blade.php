<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

</body>
</html>

@extends('master')
@section('content')
    <form action="{{route('admin.reservations')}}" method="post">
      {{ csrf_field() }}
      <button type="submit" class="btn btn-primary ml-4 mt-4">Reservations</button>
    </form>
    <form action="{{route('categories.index')}}" method="get">
      {{ csrf_field() }}
      <button type="submit" name="button" class="btn btn-warning ml-4 mt-4">Categories</button>
    </form>
@endsection
