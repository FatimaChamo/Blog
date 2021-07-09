@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <a href="{{route('admin.roles.create')}}" class="btn btn-sm btn-success float-right">Nuevo Rol</a>
    <h1>Lista de roles</h1>
@stop

@section('content')
    <div class="card">
        @if (session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
        @endif
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>
                            Role
                        </th>
                        <th colspan="2"></th>
                    </tr>

                </thead>

                <tbody>

                    @foreach ($roles as $role)
                        <tr>
                            <td> {{$role->id}} </td>
                            <td> {{$role->name}} </td>
                            <td width="10px"> 
                                <a href=" {{route('admin.roles.edit', $role)}} " class="btn btn-sm btn-success">Editar</a>
                            </td>
                            <td width="10px"> 
                                <form action="{{route('admin.roles.destroy', $role)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"> Eliminar </button> 

                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop
 