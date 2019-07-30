@extends('stripe')
@section('content')

      <h1>This is your reservation</h1>
      <div>Your init date is {{$start}}</div>
      <div>Your end date is {{$end}}</div>
      <div>Your init place is {{$location_start->ciudad}}</div>
      <div>Your end place is {{$location_end->ciudad}}</div>
      <div>Your category is {{$category->name}} ${{$category->cost}} per da$y</div>
      <div>Extras</div>
      @foreach($extras as $extra)
        <div>{{$extra->name}} ${{$extra->cost}} per day</div>
      @endforeach

    <div class="container">
        <h2 class="my-4 test-center">Payment Test cost ${{$price}} mxn</h2>

        <form action="{{route('reservations.makeReservation')}}" method="post" id="payment-form">
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
                <input type="text" name="name" placeholder="First Name" class="form-control mb-3 StripeElement StripeElement--empty">
                <input type="email" name="email" placeholder="Email" class="form-control mb-3 StripeElement StripeElement--empty">
                <div id="card-element" class="form-control">
                    <!-- A Stripe Element will be inserted here. -->
                </div>
                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button class="btn btn-primary btn-block mt-4">Submit Payment & make Reservation</button>
        </form>
    </div>

@endsection
