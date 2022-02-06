@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar Profesional.</h1>

    <a class="btn btn-primary" href="{{ route('expertos.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>


    <form action="{{ route('expertos.update',$experto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del producto') }}</label>
            <div class="col-md-6">
                <input id="title" type="text" value="{{ $experto->title }}" class="form-control" name="title" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>
            <div class="col-md-6">
                <input id="cargo" type="text" value="{{ $experto->cargo }}" class="form-control" name="cargo" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="etiquetas" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
            <div class="col-md-6">
                <select name="categoria_id" class="form-control" id="sel1" required>
                    <option style='display: none' value="{{ $experto->categoria_id }}" selected>{{ $experto->categoria->name }}</option>
                    <option value=""> ----- Seleccionar -----</option>
                    @foreach($categorias as $categoria)
                    <option value="{{ $categoria['id'] }}">{{ $categoria['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
            <div class="col-md-6">
                <input id="foto" type="file" value="{{ $experto->foto }}" class="form-control" name="foto" accept="image/*" required>
                <img src="{{ $experto->foto }}" width="100%">
            </div>
        </div>

        <div class="form-group row">
            <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('Perfil') }}</label>
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