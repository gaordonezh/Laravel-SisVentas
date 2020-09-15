@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
            <h3>Listado de Ventas <a href="venta/create" class="btn btn-info">Nuevo</a></h3>
            @include('ventas.venta.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th>Comprobante</th>
                        <th>Impuesto</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach($ventas as $ven)
                        <tr>
                            <td>{{ $ven->fecha_hora }}</td>
                            <td>{{ $ven->nombre }}</td>
                            <td>{{ $ven->tipo_comprobante.': '.$ven->serie_comprobante.'-'.$ven->num_comprobante }}</td>
                            <td>{{ $ven->impuesto }} %</td>
                            <td>S/. {{ $ven->total_venta }}</td>
                            <td>{{ $ven->estado }}</td>
                            <td>
                                <a href="{{ url('/ventas/venta/'.$ven->idventa.'') }}" class="btn btn-primary">Detalles</a>
                                <a href="" data-target="#modal-delete-{{ $ven->idventa }}" data-toggle="modal" class="btn btn-danger">Anular</a>
                            </td>
                        </tr>
                        @include('ventas.venta.modal')
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $ventas->links() }}
        </div>
    </div>
@endsection