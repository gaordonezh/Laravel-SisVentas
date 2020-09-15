@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
            <h3>Listado de articulos <a href="articulo/create" class="btn btn-info">Nuevo</a></h3>
            @include('almacen.articulo.search')
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
                        <th>Código</th>
                        <th>Categoria</th>
                        <th>Stock</th>
                        <th>Imagen</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach($articulos as $art)
                        <tr>
                            <td>{{ $art->idarticulo }}</td>
                            <td>{{ $art->nombre }}</td>
                            <td>{{ $art->descripcion }}</td>
                            <td>{{ $art->codigo }}</td>
                            <td>{{ $art->categoria }}</td>
                            <td>{{ $art->stock }}</td>
                            <td>
                                <img src="{{ asset('imagenes/articulos/'.$art->imagen) }}" alt="{{ $art->nombre }}" width="75px" class="img-thumbnail">
                            </td>
                            <td>{{ $art->estado }}</td>
                            <td>
                                <a href="{{ url('/almacen/articulo/'.$art->idarticulo.'/edit') }}" class="btn btn-dark">Editar</a>
                                <a href="" data-target="#modal-delete-{{ $art->idarticulo }}" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        @include('almacen.articulo.modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $articulos->links() }}
        </div>
    </div>
@endsection