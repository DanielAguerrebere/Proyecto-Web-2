@extends('stripe.index')
@section('content')
    <nav class="navbar navbar-light bg-light">
        <a href="{{route('admin.index')}}" class="navbar-brand h1 mb-0">
            Car Rental Service
        </a>
    </nav>

    <div class="container">
        <h2 class="my-4 test-center h2">Payment for Car Rental Service cost is ${{$price}} MXN</h2>

        <button class="btn btn-success" id="pay">Submit Payment</button>
        <button class="btn btn-primary" id="noPayment" disabled>Make Reservation</button>

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

        <form action="{{route('reservations.makeReservationPayed')}}" class="my-4" method="post" id="payment-form" style="display: none">
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
                <input type="hidden" name="is_pay" value="yes">
                <input type="text" name="name" placeholder="Name" class="form-control mb-3 StripeElement StripeElement--empty">
                <input type="email" name="email" placeholder="Email" class="form-control mb-3 StripeElement StripeElement--empty">

                    <?php

                        $to = "daniel_aguerrebere@hotmail.com";
                        $header = "From: daniel_aguerrebere@hotmail.com";
                        $subject = "Thanks for your reservation";
                        $body = "Thanks";

                        mail($to, $subject, $body, $header);


                    ?>


                <div id="card-element" class="form-control">
                    <!-- A Stripe Element will be inserted here. -->
                </div>
                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Submit Payment</button>
        </form>
    </div>

    <form action="{{route('reservations.checkReservation')}}" class="form-row mx-4 my-4 container" id="noPay" method="post" style="display: none">
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

        <button class="btn btn-primary mx-4 my-4" type="submit">Make Reservation</button>

    </form>

@endsection
