@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
            <h3>Listado de Proveedores <a href="proveedor/create" class="btn btn-info">Nuevo</a></h3>
            @include('compras.proveedor.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Tipo Doc.</th>
                        <th>Nro Doc.</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Email</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach($personas as $per)
                        <tr>
                            <td>{{ $per->idpersona }}</td>
                            <td>{{ $per->nombre }}</td>
                            <td>{{ $per->tipo_documento }}</td>
                            <td>{{ $per->num_documento }}</td>
                            <td>{{ $per->telefono }}</td>
                            <td>{{ $per->direccion }}</td>
                            <td>{{ $per->email }}</td>
                            <td>
                                <a href="{{ url('/compras/proveedor/'.$per->idpersona.'/edit') }}" class="btn btn-dark">Editar</a>
                                <a href="" data-target="#modal-delete-{{ $per->idpersona }}" data-toggle="modal" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        @include('compras.proveedor.modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $personas->links() }}
        </div>
    </div>
@endsection