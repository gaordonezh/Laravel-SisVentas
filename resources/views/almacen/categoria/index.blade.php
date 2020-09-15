@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
            <h3>Listado de categorias <a href="categoria/create" class="btn btn-info">Nuevo</a></h3>
            @include('almacen.categoria.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach($categorias as $cat)
                        <tr>
                            <td>{{ $cat->idcategoria }}</td>
                            <td>{{ $cat->nombre }}</td>
                            <td>{{ $cat->descripcion }}</td>
                            <td>
                                <a href="{{ url('/almacen/categoria/'.$cat->idcategoria.'/edit') }}" class="btn btn-dark">Editar</a>
                                <a href="" data-target="#modal-delete-{{ $cat->idcategoria }}" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        @include('almacen.categoria.modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $categorias->links() }}
        </div>
    </div>
@endsection