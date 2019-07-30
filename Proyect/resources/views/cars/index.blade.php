<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            .title {
                font-size: 84px;
            }

            a,td {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
      <div class="title m-b-md">
        Welcome
      </div>
      <h1>Select your car</h1>
      <table>
        <thead>
          <th>Make</th>
          <th>Model</th>
          <th>Category</th>
        </thead>
        @foreach($cars as $c)
        <tr>
          <td class="item"> {{$c->make}} </td>
          <td class="item"> {{$c->model}} </td>
          <td class="item"> {{$c->category->name}} </td>
        </tr>
        @endforeach
      </table>
      <a href="/cars/create">Add auto</a>
    </body>
</html>
