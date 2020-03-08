@extends('layouts.master')
<!-- Extiende de una vista padre-->

@section('my-css')
  <link rel="stylesheet" type="text/css" href="my_css.css">
@stop

@section('content-main')
<!-- Extiende Yield padre -->
  <h1>First Page</h1>
  <h2>New web</h2>
  <br>
  <div>
    <a href="{{ route('my_alias') }}">Ir a home</a>
  </div>

  <div>
    <h4>Enviado desde el controlador: </h4>
    <p>{{ $name }}</p>
  </div>

  <!-- Inncluir partials -->
  @include('my_pages.partials.trozo')

@stop
