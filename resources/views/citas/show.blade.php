@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detalles de la cita.</h1>

    <a class="btn btn-primary" href="{{ route('citas.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>

    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Categoria</strong>
        <div class="col-md-6">
            {{ $cita->categoria->name}}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Pofecional</strong>
        <div class="col-md-6">
            {{ $cita->experto->title }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Servicio</strong>
        <div class="col-md-6">
            {{ $cita->servicio->title }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Fecha inicio</strong>
        <div class="col-md-6">
            {{ $cita->start }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Fecha fin</strong>
        <div class="col-md-6">
            {{ $cita->end }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Duracion del Servicio</strong>
        <div class="col-md-6">
            {{ $cita->servicio->duracion }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Descripcion de Servicio</strong>
        <div class="col-md-6">
            {{ $cita->servicio->detail }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Fecha de Creacion</strong>
        <div class="col-md-6">
            {{ $cita->created_at }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Fecha de Creacion</strong>
        <div class="col-md-6">
            {{ $cita->status }}
        </div>
    </div>
</div>

@endsection