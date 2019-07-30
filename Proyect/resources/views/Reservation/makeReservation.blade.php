@extends('master')
@section('content')
    <form action="{{route('reservations.client')}}" method="post">
      {{ csrf_field() }}
      <h1>This is your reservation id: {{$reservation->id}}</h1>
      <div>Your name is {{$name}}</div>
      <div>Your init date is {{$start}}</div>
      <div>Your end date is {{$end}}</div>
      <div>Your init place is {{$location_start->ciudad}}</div>
      <div>Your end place is {{$location_end->ciudad}}</div>
      <div>Your category is {{$category->name}} ${{$category->cost}} per day</div>
      <div>The price is ${{$price}} mxn</div>
      @foreach($extras as $extra)
        <div>{{$extra->name}} ${{$extra->cost}} mxn per day</div>
      @endforeach
      <button type="submit" name="button">Go to Index</button>
    </form>
@endsection
