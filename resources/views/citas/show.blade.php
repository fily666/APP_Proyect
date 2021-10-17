@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detalles de la cita.</h1>

    <a class="btn btn-primary" href="{{ route('citas.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>

    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Cita</strong>
        <div class="col-md-6">
            {{ $cita->name }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Descripcion </strong>
        <div class="col-md-6">
            {{ $cita->detail }}
        </div>
    </div>
    <div class="form-group row">
        <strong class="col-md-4 col-form-label text-md-right">Fecha de creacion</strong>
        <div class="col-md-6">
            {{ $cita->created_at }}
        </div>
    </div>
</div>

@endsection