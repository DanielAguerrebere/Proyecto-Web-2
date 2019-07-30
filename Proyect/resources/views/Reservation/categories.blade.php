@extends('master')
@section('content')
      <h1>Select your type of car</h1>
      <table>
        @foreach($categories as $c)
        <tr>
          <td class="item">
            <form action="{{route('reservations.extras')}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="start" value="{{$start}}">
              <input type="hidden" name="end" value="{{$end}}">
              <input type="hidden" name="location_start" value="{{$location_start}}">
              <input type="hidden" name="location_end" value="{{$location_end}}">
              <input type="hidden" name="category_id" value="{{$c->id}}">
              <label for="button{{$c->category_id}}">{{$c->name}}</label>
              <label for="button{{$c->category_id}}">${{$c->cost}}</label>
              <button type="submit" name="button{{$c->category_id}}">GO!</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
@endsection
