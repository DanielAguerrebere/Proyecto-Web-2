<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

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

              td,a{
                  color: #636b6f;
                  padding: 0 25px;
                  font-size: 12px;
                  font-weight: 600;
                  letter-spacing: .1rem;
                  text-decoration: none;
                  text-transform: uppercase;
              }
          </style>
  </style>
  <body>

      <table border="1">

        <thead>
          <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Passengers</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="item">{{$category->name}} </td>
            <td class="item">{{$category->cost}} </td>
            <td class="item">{{$category->passengers}} </td>
          </tr>
        </tbody>

      </table>
      <a href="/categories?page=1">Back</a>
      <a href="/categories/modify/{{$category->id}}">Modify</a>
  </body>
</html>
<?php

 ?>
