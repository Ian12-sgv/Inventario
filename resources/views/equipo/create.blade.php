@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container">
    <div class="row">
<a class="btn btn-primary" style="margin: 5px" href="{{route('equipo.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
  </svg></a> </div>
</div>

    <form method="POST" action="{{route('equipo.store')}}">
        @csrf
        <table >
            <div class="container" >
                <div class="row">
                    <div class="col">
            <div class="mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default"  style="background-color: rgb(188, 188, 188)">Tipo de equipo</span>
        <input type="text" name="titulo" class="form-control" id="formGroupExampleInput" placeholder="Equipo"/>
    </div><br>

    <div class="mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default" style="background-color: rgb(188, 188, 188)">Direccion Ip</span>
            <input type="text" name="direccion_ip" class="form-control" id="formGroupExampleInput" placeholder="Direccion Ip" />
    </div><br></div>

    <div class="col">
        <div class="mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default"  style="background-color: rgb(188, 188, 188)">Modelo</span>
        <input type="text" name="modelo" class="form-control" id="formGroupExampleInput" placeholder="Modelo" >
    </div><br>

    <div class="mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default"  style="background-color: rgb(188, 188, 188)">Marca</span>
        <input type="text" name="marca" type="text" class="form-control" id="formGroupExampleInput" placeholder="Marca">
    </div></div>

    <div class="col"><div class="mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default"  style="background-color: rgb(188, 188, 188)">Serial</span>
        <input type="text" name="serial" type="text" class="form-control" id="formGroupExampleInput" placeholder="Serial"></div><br>


        <div class="mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default"  style="background-color: rgb(188, 188, 188)">Direccion Mac</span>
        <input type="text" name="direccion_mac" type="text" class="form-control" id="formGroupExampleInput" placeholder="Direccion MAC"></div><br></div>

        <div class="col">
        <div class="mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default"  style="background-color: rgb(188, 188, 188)">Componentes y marcas</span>
        <input type="text" name="componentes_marcas" type="text" class="form-control" id="formGroupExampleInput" placeholder="Componentes y Marcas"></div><br>


        <div class="mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default"  style="background-color: rgb(188, 188, 188)">Usuario</span>
        <input type="text" name="usuario" type="text" class="form-control" id="formGroupExampleInput" placeholder="Usuario"></div><br></div>

        <div class="col">
        <div class="mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default"  style="background-color: rgb(188, 188, 188)">Oficina</span>
        <input type="text" name="oficina" type="text" class="form-control" id="formGroupExampleInput" placeholder="Oficina"></div><br>
 
        <button class="btn btn-success" style="margin: 2px" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
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