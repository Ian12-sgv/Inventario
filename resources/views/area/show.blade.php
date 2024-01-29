@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')

<a href="{{route('area.index')}}">atras</a>
<h1>{{$area->title}}</h1>
    
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop
 