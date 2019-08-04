@extends('master')
@section('content')
    <form action="{{route('admin.index')}}" class="mx-4 my-4 form">
        <h3 class="h3 form-group">Reservation Number {{$reservation->id}}</h3>
        <p class="p form-group">Register Name: {{$name}}</p>
        <p class="p form-group">Your initial date is: {{$start}}</p>
        <p class="p form-group">Your end day is: {{$end}}</p>
        <p class="p form-group">Your pick up place is: {{$location_start->ciudad}}</p>
        <p class="p form-group">Your drop out place is: {{$location_end->ciudad}}</p>
        <p class="p form-group">The car category is: {{$category->name}} with a cost of: ${{$category->cost}} per day</p>
        @foreach($extras as $extra)
            <p class="p">{{$extra->name}} ${{$extra->cost}} per day</p>
        @endforeach
        <p class="p form-group">The total price is: ${{$price}}</p>

        <button class="btn btn-primary" type="submit">Return Home</button>
    </form>

    <form action="<?php echo "http://localhost:8000/delete/"?>{{$reservation->id}}" id="cancel-form" class="my-1 mx-3">
        <button id="btnCancel" class="btn btn-danger mx-1" type="button">
            Cancel Reservation
        </button>
    </form>

    <div class="toast mx-4 my-4" role="alert">
        <div class="toast-header">
            Reservation #{{$reservation->id}}
        </div>
        <div class="toast-body">
            Canceled
        </div>
    </div>

    <script>
            $('#btnCancel').click(function () {
                $('.toast').toast('show');
                $('#cancel-form').submit();
            });
    </script>

@endsection
