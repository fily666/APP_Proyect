@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detalles del Aticulo.</h1>

    <a class="btn btn-primary" href="{{ route('portafolios.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>

    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Nombre del producto</strong>
        <div class="col-md-6">
            {{ $portafolio->name }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Imagen</strong>
        <div class="col-md-6">
            {{ $portafolio->imagen }}
            <img src="{{ $portafolio->imagen }}" width="100%">
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">categoria</strong>
        <div class="col-md-6">
            {{ $portafolio->categoria->name }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Descripcion </strong>
        <div class="col-md-6">
            {{ $portafolio->detail }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Fecha de creacion</strong>
        <div class="col-md-6">
            {{ $portafolio->created_at }}
        </div>
    </div>
</div>

@endsection