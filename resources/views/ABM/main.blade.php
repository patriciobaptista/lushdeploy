@extends('layout')

@section('title')
  <link rel="stylesheet" type="text/css" href="{{asset('css/ABM.css') }}">
  <title>Admin</title>

@endsection
@section('main')
<main id="main" class="container-fluid">
  <div class="row pt-5 text-center mr-0 pr-0">
    <div class="col-12 pt-5 text-center pr-0 mr-0">
      <table style="width:100%" border="1">
        <tr>
           <th>ID</th>
           <th>Destination</th>
           <th>Description</th>
           <th>Price</th>
           <th>Stay Length</th>
           <th>Stock</th>
           <th></th>
           <th></th>
        </tr>
        @foreach ($products as $id => $producto)
          <tr>
            <td class="">{{$producto->id}}</td>
            <td class="">{{$producto->destination}}</td>
            <td class="">{{$producto->description}}</td>
            <td class="">{{$producto->price}}</td>
            <td class="">{{$producto->stock}}</td>
            <td class="">{{$producto->stay_length}}</td>




        <td>
            <a class="btn btn-primary" href="edit/{{$producto->id}}"><i class="far fa-edit"></i></a>
         </td>

        <td>
          <a class="btn btn-primary" href="{{action('ABMcontroller@delete', ["id" => $producto->id])}}"><i class="far fa-trash-alt"></i></a>
        </td>


        </tr>
      @endforeach
      </table>
        <a class="plus btn btn-primary" href="/ABM/add"><i class="fas fa-plus fa-2x"></i></a>
    </div>
  </div>
</main>





@endsection
