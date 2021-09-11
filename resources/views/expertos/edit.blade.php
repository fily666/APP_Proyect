@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar Profesional.</h1>

    <a class="btn btn-primary" href="{{ route('expertos.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>


    <form action="{{ route('expertos.update',$experto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del producto') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" value="{{ $experto->name }}" class="form-control" name="name" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="etiquetas" class="col-md-4 col-form-label text-md-right">{{ __('Etiqueta') }}</label>
            <div class="col-md-6">
                <select value="{{ $experto->profesion }}" name="profesion" class="form-control" id="sel1">
                    <option> ----- Seleccionar -----</option>
                    <option value="1">Barberia</option>
                    <option value="2">Tattoo</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
            <div class="col-md-6">
                <textarea id="detail" style="height:150px" class="form-control" name="detail" placeholder="Detail" required>{{ $experto->detail }}</textarea>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary" style="float: right;">
                    {{ __('Actualizar') }}
                </button>
            </div>
        </div>
    </form>

</div>
@endsection