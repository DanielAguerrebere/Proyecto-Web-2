@extends('master')
@section('content')
    <h3 class="h3 mx-4 my-4">Categories DB</h3>
      <table class="table mx-4 my-4">
        <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Actions</th>
          <th scope="col">Name</th>
          <th scope="col">Cost</th>
          <th scope="col">Cities</th>
          <th scope="col">
              <button class="btn btn-success mx-4" id="submitBtn" type="button">
                  ADD
              </button>
          </th>
        </tr>
        </thead>
        <tbody>
          @foreach($categories as $c)
            <tr>
              <th scope="row">{{$c->id}}</th>
              <td>
                  <form action="<?php echo "http://localhost:8000/categories/delete/"?>{{$c->id}}" class="my-2">
                      <button class="btn btn-danger mx-4" type="submit">
                          DELETE
                      </button>
                  </form>
              </td>
              <td><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->name}}</a> </td>
              <td><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->cost}}</a> </td>
              @foreach($c->locations as $location)
              <td><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$location->ciudad}}</a> </td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
    <form action="<?php echo "http://localhost:8000/categories/create"?>" id="addForm">
    </form>

    <script>
        $('#submitBtn').on('click', function () {
            $('#addForm').submit();
        });
    </script>

@endsection
