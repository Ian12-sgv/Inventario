@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container">
  <div class="row">
<a class="btn btn-primary" style="margin: 5px" href="{{route('equipo.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
  </svg></a></div></div>
    <form method="POST" action="{{route('equipo.update', $equipo->id)}}">
        @method('PUT')
        @csrf
        <table>
        <div class="container">
          <div class="row">
              <div class="col">
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Titulo</label>
        <input name="titulo" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Selecciona equipo" value="{{$equipo->titulo}}"></div>
     

        <div class="mb-3"> 
        <label for="formGroupExampleInput" class="form-label">direccion Ip</label>
        <input type="text" name="direccion_ip" class="form-control" id="formGroupExampleInput" value="{{ $equipo->direccion_ip}}"></div></div>

        <div class="col">
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control" id="formGroupExampleInput" value="{{ $equipo->modelo}}"></div>

        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Marca</label>
        <input type="text" name="marca" class="form-control" id="formGroupExampleInput" value="{{ $equipo->marca}}"></div></div>

        <div class="col">
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Serial</label>
        <input type="text" name="serial" class="form-control" id="formGroupExampleInput" value="{{ $equipo->serial}}"></div>

        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">direccion mac</label>
        <input type="text" name="direccion_mac" class="form-control" id="formGroupExampleInput" value="{{ $equipo->direccion_mac}}"></div></div>

        <div class="col">
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">componentes y marcas</label>
        <input type="text" name="componentes_marcas" class="form-control" id="formGroupExampleInput" value="{{ $equipo->componentes_marcas}}"></div>

        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">usuario</label>
        <input type="text" name="usuario" class="form-control" id="formGroupExampleInput" value="{{ $equipo->usuario}}"></div></div>

        <div class="col">
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">oficina</label>
        <input type="text" name="oficina" class="form-control" id="formGroupExampleInput" value="{{ $equipo->oficina}}"></div>

        <button class="btn btn-warning" style="margin: 33px 0px 0px 0px" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
        </svg></button></div>
      </div>
    </div>
      </table>
    </form>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop
