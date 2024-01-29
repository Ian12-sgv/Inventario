@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
<a class="btn btn-primary" style="margin: 5px" href="{{route('area.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
  </svg></a>
<form method="POST" action="{{route('area.update', $area->id)}}">
    @method('PUT')
    @csrf
    <table>
    <td><div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">Modifica el area</span>
    <input type="text" name="title" value="{{$area->title}}" input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Nombre del Area" style="width: 300px"/></div>
    </td>
    <td style="padding-bottom: 15px"><button class="btn btn-warning" style="margin: 5px"  type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
      </svg></button></td>
    </table>
</form>
    
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop
