@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar Servicio.</h1>

    <a class="btn btn-primary" href="{{ route('servicios.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>


    <form action="{{ route('servicios.update',$servicio->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del producto') }}</label>
            <div class="col-md-6">
                <input id="title" type="text" value="{{ $servicio->title }}" class="form-control" name="title" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="etiquetas" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
            <div class="col-md-6">
                <select name="categoria_id" class="form-control" id="sel1" required>
                    <option style='display: none' value="{{ $servicio->categoria_id }}" selected>{{ $servicio->categoria->name }}</option>
                    <option value=""> ----- Seleccionar -----</option>
                    @foreach($categorias as $categoria)
                    <option value="{{ $categoria['id'] }}">{{ $categoria['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="precio" class="col-md-4 col-form-label text-md-right">{{ __('Presio $') }}</label>
            <div class="col-md-6">
                <input id="precio" type="number" value="{{ $servicio->precio }}" class="form-control" name="precio" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="duracion" class="col-md-4 col-form-label text-md-right">{{ __('Duracion del servicio en minutos') }}</label>
            <div class="col-md-6">
                <input id="duracion" type="number" value="{{ $servicio->duracion }}" class="form-control" name="duracion" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
            <div class="col-md-6">
                <textarea id="detail" style="height:150px" class="form-control" name="detail" placeholder="Detail" required>{{ $servicio->detail }}</textarea>
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