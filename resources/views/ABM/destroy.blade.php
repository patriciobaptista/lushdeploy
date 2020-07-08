@extends('layout')

@section('title')
@endsection

@section('main')
  <div class="row d-flex pt-5">
    <div class="col-8 justify-content-center">
      <h2 id="maintext">Estas seguro que quisieras borrar el producto del base de datos?</h2>
      <form method="post" action="delete.php" class="justify-content-between">
        <a type="submit" name="confirm" id="yes" class="btn btn-primary col-3">Si</a>
        <a href="/ABM/main" class="btn btn-secondary col-3">No</a>
      </form>

    </div>
  </div>
@endsection
