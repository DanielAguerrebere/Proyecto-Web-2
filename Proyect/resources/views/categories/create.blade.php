@extends('master')
@section('content')
    <form action="/categories/insert" method="post" class="mx-4 my-4" id="form">
        <div id="message"></div>
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

        <button type="submit" id="add" class="btn btn-success mx-4 my-4">ADD</button>

    </form>
@endsection
