@extends('master')
@section('content')
<style media="screen">
table, th, td {
    border: 1px solid gray;
    border-collapse: collapse;
}
</style>
      <div class="title m-b-md">
        Welcome
      </div>
      <h1>Select your type of car</h1>
      <table style="width:100%">
        <thead>
          <th>Id</th>
          <th>Name</th>
          <th>Cost</th>
          <th>Cities</th>
        </thead>
        @foreach($categories as $c)
        <tr>
          <td class="item"><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->id}}</a> </td>
          <td class="item"><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->name}}</a> </td>
          <td class="item"><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$c->cost}}</a> </td>
          @foreach($c->locations as $location)
          <td class="item"><a href="http://localhost:8000/categories/detail/{{$c->id}}"> {{$location->ciudad}}</a> </td>
          @endforeach
            </tr>
        @endforeach
      </table>
      <a href="<?php
      if(isset($_GET['page']))
      {
        $page =$_GET['page'];
      }
      else {
        $page = 1;
      }
      $limite_inferior = 1;
      /*
      * Es para ir a la primera pagina
      */
        echo "http://localhost:8000/categories?page=1";
        ?>">Primera</a>
      <a href="<?php
      /*
      * Es para retroceder de página
      */
      if($page > $limite_inferior)
      {
        echo "http://localhost:8000/categories?page=".($page - 1);
      }
      else
      {
        echo "http://localhost:8000/categories?page=1";
      }
        ?>">Anterior</a>
      <?php
      /*
      * Es para crear los numeros de las pagina
      */
        for ($i=1; $i <= $categories->lastPage(); $i++):?>

        <a href="<?php
          echo "http://localhost:8000/categories?page=".$i;
          ?>" id="<?php
          if($i == $page)
          {
            echo "current_page";
          }
          else {
            echo "nocurrent_page";
          } ?>"><?php echo $i; ?></a>

        <?php
        endfor;
       ?>

      <a href="<?php
      /*
      * Es para controlar si podemos avanzar de pagina,si si avanzamos,si no nos quedamos
      */
      if($page < $i - 1)
      {
        echo "http://localhost:8000/categories?page=".($page + 1);
      }
      else
      {
        echo "http://localhost:8000/categories?page=".$page;
      }
        ?>">Siguiente</a>

        <a href="<?php
        /*
        * Es para avanzar a la ultima página
        */
          echo "http://localhost:8000/categories?page=".($i-1);
          ?>">Ultima</a>

      <div>
      </div>
      <a href="<?php
      /*
      * Agregar nuevo
      */
        echo "http://localhost:8000/categories/create";
        ?>">Agregar</a>
@endsection
