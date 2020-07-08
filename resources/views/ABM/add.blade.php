@extends('layout')

@section('title')
  <link rel="stylesheet" type = "text/css" href="{{ asset('css/editar.css') }}">
  <title>Agregar productos</title>
@endsection

@section('main')
  <div class="row container pt-4 pl-5">
    <div class="col-12 pt-4">
      <h1 class="pt-5">Add new product</h1>
    </div>
  </div>
  <div class="row container pl-5">
    <div class="col-12">
  <form method="post" action="{{action('ABMcontroller@add')}}" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
      <label for="Destino">Destination</label>
      <input type="text" class="form-control" name="destination" id="Destino" value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="descripcion">Description</label>
      <input type="text" class="form-control" name="description" id="descripcion" value="" rows="4"></input>
    </div>
    <div class="form-group">
      <label for="Precio">Price</label>
      <input type="text" class="form-control" name="price" id="Precio" value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="Duracion">Stay length</label>
      <input type="text" class="form-control" name="stay" id="Duracion" value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="Stock">Stock</label>
      <input type="text" class="form-control" name="stock" id="Stock" value="" rows="1"></input>
    </div>
    <div class="form-group">
      <label for="photos">Photos</label>
      <input type="file" multiple="multiple" class="form-control" name="photos[]" id="photos" value=""></input>
    </div>

    <h2>Package highlights</h2>
    <div id="divHighlights">
  </div>
  <button id="addhighlight" class="btn btn-primary mb-3" type="button" name="addhighlight">Agregar highlight</button>


  <h2>Package includes</h2>
  <div id="divIncludes">
  </div>
  <button id="addInclude" class="btn btn-primary mb-3" type="button" name="button">Agregar include</button>


  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary col-3">Submit</button>
    <a href="/ABM/main" class="btn btn-secondary col-3">Back</a>
  </div>
    </form>
  </div>
  <script type="text/javascript" src="{{asset('js/ABMedit.js')}}"></script>
@endsection
