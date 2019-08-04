@extends('master')
@section('content')
    <form action="{{route('reservations.client')}}" method="post">
      {{ csrf_field() }}
      <button type="submit" class="btn btn-primary ml-4 mt-4">Client</button>
    </form>
    <form action="{{route('admin.menu')}}" method="post">
      {{ csrf_field() }}
      <button type="submit" name="button" class="btn btn-success ml-4 mt-4">Admin</button>
    </form>
@endsection
