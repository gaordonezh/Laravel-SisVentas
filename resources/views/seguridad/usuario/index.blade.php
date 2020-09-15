@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
            <h3>Listado de usuarios <a href="usuario/create" class="btn btn-info">Nuevo</a></h3>
            @include('seguridad.usuario.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usu)
                        <tr>
                            <td>{{ $usu->id }}</td>
                            <td>{{ $usu->name }}</td>
                            <td>{{ $usu->email }}</td>
                            <td>
                                <a href="{{ url('/seguridad/usuario/'.$usu->id.'/edit') }}" class="btn btn-dark">Editar</a>
                                <a href="" data-target="#modal-delete-{{ $usu->id }}" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        @include('seguridad.usuario.modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $usuarios->links() }}
        </div>
    </div>
@endsection