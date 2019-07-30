<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation Summary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

</body>
</html>

@extends('master')
@section('content')
    <form action="{{route('admin.index')}}" method="post" class="container">
        {{ csrf_field() }}
        <h1 class="h2">This is your reservation number: {{$reservation->id}}</h1>
        <div class="form-control my-2">Thank you {{$name}}</div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-control">Your initial date is {{$start}}</div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-control">Your final date is {{$end}}</div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-control">Your initial place is {{$location_start->ciudad}}</div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-control">Your final place is {{$location_end->ciudad}}</div>
            </div>
        </div>
        <div class="form-control mb-2">Your car is {{$category->name}} ${{$category->cost}} MXN per day</div>
        @foreach($extras as $extra)
            <div class="form-control mb-2">{{$extra->name}} ${{$extra->cost}} MXN per day</div>
        @endforeach
        <div class="form-control mb-2">The price is ${{$price}} MXN</div>
        <button type="submit" name="button" class="my-4 btn btn-success">Home</button>

    </form>
@endsection
