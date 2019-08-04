@extends('master')
@section('content')
      <h1 class="h3 mx-4 my-4">Select a Car Category</h1>
      <table class="table mx-4 my-4">
        @foreach($categories as $c)
        <tr>
          <td scope="col">
            <form action="{{route('reservations.extras')}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="start" value="{{$start}}">
              <input type="hidden" name="end" value="{{$end}}">
              <input type="hidden" name="location_start" value="{{$location_start}}">
              <input type="hidden" name="location_end" value="{{$location_end}}">
              <input type="hidden" name="category_id" value="{{$c->id}}">
              <button class="btn btn-primary" type="submit" name="button{{$c->category_id}}">
                {{$c->name}} <span class="badge badge-light">${{$c->cost}}</span>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
@endsection
