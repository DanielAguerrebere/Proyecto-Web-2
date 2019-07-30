<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <body>

      <table class="table">

        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Cost</th>
            <th scope="col">Passengers</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>{{$category->name}} </td>
            <td>{{$category->cost}} </td>
            <td>{{$category->passengers}} </td>
          </tr>
        </tbody>

      </table>
      <a href="/categories?page=1">Back</a>
      <a href="/categories/modify/{{$category->id}}">Modify</a>
  </body>
</html>
<?php

 ?>
