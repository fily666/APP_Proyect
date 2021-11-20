@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detalles del Servicio.</h1>

    <a class="btn btn-primary" href="{{ route('servicios.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>

    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Nombre del Servicio</strong>
        <div class="col-md-6">
            {{ $servicio->title }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Categoria</strong>
        <div class="col-md-6">
            {{ $servicio->categoria->name }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Precio $</strong>
        <div class="col-md-6">
            {{ $servicio->precio }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Duracion del servicio en minutos</strong>
        <div class="col-md-6">
            {{ $servicio->duracion }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Descripcion </strong>
        <div class="col-md-6">
            {{ $servicio->detail }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Fecha de creacion</strong>
        <div class="col-md-6">
            {{ $servicio->created_at }}
        </div>
    </div>
</div>

@endsection