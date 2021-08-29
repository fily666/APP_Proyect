@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detalles de usuario.</h1>

    <a class="btn btn-primary" href="{{ route('usuarios.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>

    <div class="form-group row">
        <strong  class="col-md-4 col-form-label text-md-right">Name</strong>
        <div class="col-md-6">
            {{ $usuario->name }}
        </div>
    </div>
    <div class="form-group row">
        <strong  class="col-md-4 col-form-label text-md-right">Email</strong>
        <div class="col-md-6">
            {{ $usuario->email }}
        </div>
    </div>
    <div class="form-group row">
        <strong  class="col-md-4 col-form-label text-md-right">Password</strong>
        <div class="col-md-6">
            {{ $usuario->password }}
        </div>
    </div>
    <div class="form-group row">
        <strong  class="col-md-4 col-form-label text-md-right">Confirmaacion de </strong>
        <div class="col-md-6">
            {{ $usuario->remember_token }}
        </div>
    </div>
    <div class="form-group row">
        <strong  class="col-md-4 col-form-label text-md-right">Fecla de creacion</strong>
        <div class="col-md-6">
            {{ $usuario->created_at }}
        </div>
    </div>

</div>
@endsection