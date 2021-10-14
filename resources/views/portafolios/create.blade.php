@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Agregar Producto.</h1>

    <a class="btn btn-primary" href="{{ route('portafolios.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>

    <form action="{{ route('portafolios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del producto') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
            <div class="col-md-6">
                <input id="imagen" type="file" class="form-control" name="imagen" accept="image/*" placeholder="imagen" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="etiquetas" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
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
            <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
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