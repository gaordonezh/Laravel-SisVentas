@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Usuario: {{$usuario->name}}</h3>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {!! Form::model($usuario,['method'=>'PUT','route'=>['usuario.update',$usuario->id]])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre..." value="{{$usuario->name}}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Contraseña...">
            </div>
            <div class="form-group">
                <label for="Confirme Contraseña">Confirmar contraseña</label>
                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {!! Form::close() !!}

            
        </div>
    </div>
@endsection