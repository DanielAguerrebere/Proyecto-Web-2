<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    @yield('content')
    <br>
    <button class="btn btn-danger ml-4" onclick="goBack()">Back</button>

      <script>
      function goBack() {
        window.history.back();
      }
      </script>

    <form action="{{route('admin.index')}}" method="get">
      <br><button class="btn btn-info ml-4" type="submit">Index</button>
    </form>
  </body>
</html>
