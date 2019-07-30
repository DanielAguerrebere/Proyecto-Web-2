@extends('master')
@section('content')
    <form action="{{route('reservations.check')}}" method="post">
      {{ csrf_field() }}
      <h1>Extras</h1>

      <input type="hidden" name="start" value="{{$start}}">
      <input type="hidden" name="end" value="{{$end}}">
      <input type="hidden" name="location_start" value="{{$location_start}}">
      <input type="hidden" name="location_end" value="{{$location_end}}">
      <input type="hidden" name="category_id" value="{{$category_id}}">
      @foreach($extras as $extra)
      <label for="{{$extra->id}}">{{$extra->name}} ${{$extra->cost}}</label>
      <input type="checkbox" name="extras[]" value="{{$extra->id}}">
      @endforeach
      <button type="submit" name="button"> Add Extra </button>
    </form>
@endsection
