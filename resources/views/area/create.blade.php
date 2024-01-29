@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<a class="btn btn-primary" style="margin: 5px" href="{{route('area.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
  </svg></a>
    <form method="POST" action="{{route('area.store')}}">
        @csrf
        <table>
        <td><div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Escribe el area</span>
        <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Nombre del Area" style="width: 300px"/></div></td>

        <td style="padding-bottom: 15px"><button class="btn btn-success" style="margin: 5px"  type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2-fill" viewBox="0 0 16 16">
            <path d="M12 2h-2v3h2z"/>
            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1"/>
          </svg></button></td>
        </table>
    </form>
@stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
        <script> console.log('Hi!'); </script>
    @stop