@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<a href="{{route('admin.users.create')}}" class="btn btn-sm btn-success float-right">Nuevo Usuario</a>

    <h1>Lista de Usuarios</h1>
    
@stop

@section('content')
    @livewire('admin.users-index')
@stop
 