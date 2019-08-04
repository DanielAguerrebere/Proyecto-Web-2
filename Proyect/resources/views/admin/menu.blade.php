@extends('master')
@section('content')
    <div class="mt-4 mx-4 alert alert-warning">This site is only for Admins</div>
    <form action="{{route('admin.reservations')}}" method="post">
      {{ csrf_field() }}
      <button type="submit" class="btn btn-primary ml-4 mt-4">Reservations</button>
    </form>
    <form action="{{route('categories.index')}}" method="get">
      {{ csrf_field() }}
      <button type="submit" name="button" class="btn btn-warning ml-4 mt-4">Categories</button>
    </form>
@endsection
