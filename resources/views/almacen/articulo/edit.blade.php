@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Articulo: {{$articulo->nombre}}</h3>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            {!! Form::model($articulo,['method'=>'PATCH','route'=>['articulo.update',$articulo->idarticulo], 'files'=>true])!!}
            {{Form::token()}}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" required value="{{ $articulo->nombre }}" name="nombre" placeholder="Nombre...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nombre">Categoria</label>
                            <select name="idcategoria" class="form-control">
                                @foreach($categorias as $cat)
                                    @if($cat->idcategoria == $articulo->idcategoria)
                                    <option value="{{$cat->idcategoria}}" selected>{{$cat->nombre}}</option>
                                    @else
                                    <option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" class="form-control" required value="{{ $articulo->codigo }}" name="codigo" placeholder="Código del articulo...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" required value="{{ $articulo->stock }}" name="stock" placeholder="Stock del articulo...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" value="{{ $articulo->descripcion }}" name="descripcion" placeholder="Descripción del articulo...">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" class="form-control" name="imagen">
                            @if(($articulo->imagen) != "")
                            <img src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" height="200px" width="200px" class="img-thumbnail">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}

            
        </div>
    </div>
@endsection