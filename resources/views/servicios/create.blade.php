@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Agregar Servicio.</h1>

    <a class="btn btn-primary" href="{{ route('servicios.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>

    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Servicio') }}</label>
            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="categoria_id" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
            <div class="col-md-6">
                <select name="categoria_id" class="form-control" id="sel1" required>
                    <option value=""> ----- Seleccionar -----</option>
                    @foreach($categorias as $categoria)
                    <option value="{{ $categoria['id'] }}">{{ $categoria['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Precio $') }}</label>
            <div class="col-md-6">
                <input id="precio" type="number" class="form-control" name="precio" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="duracion" class="col-md-4 col-form-label text-md-right">{{ __('Duracion del servicio en minutos') }}</label>
            <div class="col-md-6">
                <input id="duracion" type="number" class="form-control" name="duracion" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
            <div class="col-md-6">
                <textarea id="detail" style="height:150px" class="form-control" name="detail" required></textarea>
            </div>
        </div>




        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary" style="float: right;">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection