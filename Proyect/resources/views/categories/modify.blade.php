@extends('master')
@section('content')
    <form action="/categories/update/{{$category->id}}" method="post" class="mx-4 my-4">

        <div class="form-group">
          <label for="name" class="mx-1">Name:</label>
          <input id="name" type="text" name="name" value="{{$category->name}}">
        </div>

        <div class="form-group">
          <label for="passengers" class="mx-1">Passengers:</label>
          <input id="passengers" type="text" name="passengers" value="{{$category->passengers}}">
        </div>

        <div class="form-group">
          <label for="cost">Cost:</label>
          <input id="cost" type="text" name="cost" value="{{$category->cost}}">
        </div>

        <div class="form-group">
          <label for="location">Location:</label>
          @foreach($locations as $location)
            <input type="checkbox" id="location[{{$location->ciudad}}]" value="{{$location->id}}" checked="checked">
                <label for="location[{{$location->ciudad}}]">{{$location->ciudad}}</label>
          @endforeach
        </div>

      <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
