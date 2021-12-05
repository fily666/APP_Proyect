@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detalles del Profesional.</h1>

    <a class="btn btn-primary" href="{{ route('expertos.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>

    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Nombre del producto</strong>
        <div class="col-md-6">
            {{ $experto->title }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Categoria</strong>
        <div class="col-md-6">
            {{ $experto->categoria->name }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Descripcion </strong>
        <div class="col-md-6">
            {{ $experto->detail }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Fecha de creacion</strong>
        <div class="col-md-6">
            {{ $experto->created_at }}
        </div>
    </div>
</div>

@endsection