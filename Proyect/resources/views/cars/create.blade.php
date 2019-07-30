<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
      html, body {
          background-color: #fff;
          font-family: 'Raleway', sans-serif;
          font-weight: 100;
          height: 100vh;
          margin: 0;
      }
      .item{
        color:black;
        font-weight: 10000;
      }

      .full-height {
          height: 100vh;
      }


      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }

      .content {
          text-align: center;
      }

      .title {
          font-size: 84px;
      }

      a,label,button {
          color: #636b6f;
          padding: 0 25px;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }
  </style>
  <body>
    <form action="{{route('cars.store')}}" method="post">
      {{ csrf_field() }}
      <label for="make">Make</label>
      <input id="make" type="text" name="make">

      <label for="model">Model</label>
      <input id="model" type="text" name="model">

      <label for="year">Year</label>
      <input id="year" type="text" name="year">

      <select name="category_id">
        @foreach($categories as $c)
        <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
      </select>

      <button type="submit">ADD</button>
    </form>
  </body>
</html>
