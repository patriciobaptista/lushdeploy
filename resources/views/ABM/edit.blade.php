@extends('layout')

@section('title')
  <link rel="stylesheet" type="text/css" href="{{asset('css/ABM.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/editar.css') }}">
  <script type="text/javascript" src="{{asset('js/ABMedit.js')}}">

  </script>
  <title>Admin - Edit</title>
@endsection

@section('main')
  <div class="row pt-4">
    <div class="col-12 text-center pt-4">
      <h1 class="pt-4">Edit product information</h1>
    </div>
  </div>
  <div class="row container">
  <div class="col-12 col-lg-10">
  <form id="editform" class="container-fluid" method="post" action="/ABM/edit" enctype="multipart/form-data">
    @csrf

  <div class="form-group">
    <input type="hidden" name="id" value="{{$product->id}}">
  <label for="Destino">Destino</label>
  <input type="text" class="form-control" name="destination" id="Destino" value="{{$product->destination}}" rows="1"></input>
  </div>
  <div class="form-group">
  <label for="descripcion">Descripcion</label>
  <input type="text" class="form-control" name="description" id="descripcion" value="{{$product->description}}" rows="4"></input>
  </div>
  <div class="form-group">
  <label for="Precio">Precio</label>
  <input type="text" class="form-control" name="price" id="Precio" value="{{$product->price}}" rows="1"></input>
  </div>
  <div class="form-group">
  <label for="Duracion">Duracion en dias</label>
  <input type="text" class="form-control" name="stay" id="Duracion" value="{{$product->stay_length}}" rows="1"></input>
  </div>
  <div class="form-group">
  <label for="Stock">Lugares vacantes</label>
  <input type="text" class="form-control" name="stock" id="Stock" value="{{$product->stock}}" rows="1"></input>
  </div>

  <h2 class="edit">Highlights:</h2>




  @foreach ($highlights as $key => $value)

<div class="row">


    <div class="form-group col-10">
    <label for="highlight">Highlight {{$loop->index+1}}</label>
    <input type="hidden" name="highlightid" value="{{$value->id}}">
    <input type="text" class="form-control" name="highlights[{{$value->id}}]" id="highlight" value="{{$value->includes}}" rows="1"></input>
    </div>
    <div class="col-2">
    <a class="btn btn-primary mt-lg-4" href="{{action('ABMcontroller@borrarHighlight', ["id" => $value->id])}}">Borrar</a></button>
    </div>
  </div>
  @endforeach
  <div id="divHighlights">
</div>
<button id="addhighlight" class="btn btn-primary mb-3" type="button" name="addhighlight">Agregar highlight</button>


  <h2 class="edit">Trip includes</h2>

  @foreach ($includes as $key => $value)
    <div class="row">

    <div class="form-group col-10">
    <label for="Includes">Include {{$loop->index+1}}</label>
    <input type="text" class="form-control" name="includes[{{$value->id}}]" id="Includes" value="{{$value->includes}}" rows="1"></input>
    </div>
    <div class="col-2 mt-lg-4">
      <a href="{{action('ABMcontroller@borrarInclude', ["id" => $value->id])}}" class="btn btn-primary">Borrar</a>
    </div>
  </div>

  @endforeach
    <div id="divIncludes">
  </div>
  <button id="addInclude" class="btn btn-primary mb-3" type="button" name="button">Agregar include</button>

  <h2 class="edit">Editar fotos</h2>
  @php
    $photocounter = 1;
  @endphp
  @if(count($photos) != 0)

  @foreach($photos as $photo)
    @php
      $photocounter++;
    @endphp


  <div class="row my-3 flex-column flex-lg-row flex-wrap">
    <div class="col-6 col-lg-3 row">
        <img class="formphoto col" src="{{asset('storage/DestinationPhoto/' . $photo->name)}}" alt="{{$photo->name}}">
    </div>

    <div class="col-6 col-lg-3 pt-lg-5 pl-5">
      <a href="{{action('ABMcontroller@borrarFoto', ["id" => $photo->id])}}" class=" btn btn-primary">Borrar</a>
    </div>
  </div>

@endforeach

  @endif

  <div class="form-group mb-4">
  <label for="photos">Agregar mas fotos del destino</label>
  <input type="hidden" name="counter" value="{{$photocounter}}">
  <input type="file" multiple="multiple" class="form-control" name="photos[]" id="photos" value=""></input>
  </div>




  <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
  <a href="/ABM/main" class="btn btn-secondary col-3">Volver</a>
  </form>


  </div>

  </div>
@endsection
