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
@extends('stripe.index')
@section('content')
    <nav class="navbar navbar-light bg-light">
        <a href="{{route('admin.index')}}" class="navbar-brand h1 mb-0">
            Car Rental Service
        </a>
    </nav>
    <div class="container mx-4 my-4">
      <h1>This is your reservation summary</h1>
      <div>Your initial date is {{$start}}</div>
      <div>Your final date is {{$end}}</div>
      <div>Your initial place is {{$location_start->ciudad}}</div>
      <div>Your destination place is {{$location_end->ciudad}}</div>
      <div>Your Car is a {{$category->name}} ${{$category->cost}} per day</div>
      <div>Extras</div>
      @foreach($extras as $extra)
        <div>{{$extra->name}} ${{$extra->cost}} per day</div>
      @endforeach
    </div>

    <div class="container">
        <h2 class="my-4 test-center h2">Payment for Car Rental Service cost is ${{$price}} MXN</h2>

        <button class="btn btn-success" id="pay">Submit Payment</button>
        <button class="btn btn-primary" id="noPayment">Make Reservation</button>

        <script>
            document.getElementById('pay').addEventListener('click', function () {
                var x = document.getElementById("payment-form");
                if (x.style.display === "none"){
                    x.style.display = "block";
                }
                else {
                    x.style.display = "none"
                }
            });
            document.getElementById('noPayment').addEventListener('click', function () {
                var x = document.getElementById("noPay");
                if (x.style.display === "none"){
                    x.style.display = "block";
                }
                else {
                    x.style.display = "none"
                }
            });
        </script>

        <form action="{{route('reservations.makeReservation')}}" class="my-4" method="post" id="payment-form" style="display: none">
          {{ csrf_field() }}
            <div class="form-row">
                @foreach($extras as $extra)
                  <input type="hidden" name="extras[]" value="{{$extra->id}}">
                @endforeach
                <input type="hidden" name="start" value="{{$start}}">
                <input type="hidden" name="end" value="{{$end}}">
                <input type="hidden" name="location_start" value="{{$location_start->id}}">
                <input type="hidden" name="location_end" value="{{$location_end->id}}">
                <input type="hidden" name="category_id" value="{{$category->id}}">
                <input type="hidden" name="price" value="{{$price}}">
                <input type="text" name="name" placeholder="Name" class="form-control mb-3 StripeElement StripeElement--empty">
                <input type="email" name="email" placeholder="Email" class="form-control mb-3 StripeElement StripeElement--empty">
                <div id="card-element" class="form-control">
                    <!-- A Stripe Element will be inserted here. -->
                </div>
                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Submit Payment</button>
        </form>
    </div>

    <form action="{{route('reservations.makeReservation')}}" class="form-row mx-4 my-4 container" id="noPay" style="display: none">
        @foreach($extras as $extra)
            <input type="hidden" name="extras[]" value="{{$extra->id}}">
        @endforeach
        <input type="hidden" name="start" value="{{$start}}">
        <input type="hidden" name="end" value="{{$end}}">
        <input type="hidden" name="location_start" value="{{$location_start->id}}">
        <input type="hidden" name="location_end" value="{{$location_end->id}}">
        <input type="hidden" name="category_id" value="{{$category->id}}">
        <input type="hidden" name="price" value="{{$price}}">
        <input type="text" name="name" placeholder="First Name" class="form-control mb-3 StripeElement StripeElement--empty">

        <button class="btn btn-primary mx-4 my-4" type="submit">Make Reservation</button>

    </form>

@endsection
