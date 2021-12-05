@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar Artuculo.</h1>

    <a class="btn btn-primary" href="{{ route('portafolios.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>


    <form action="{{ route('portafolios.update',$portafolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del producto') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" value="{{ $portafolio->name }}" class="form-control" name="name" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
            <div class="col-md-6">
                <input id="imagen" type="file" value="{{ $portafolio->imagen }}" class="form-control" name="imagen" accept="image/*" placeholder="imagen" required>
                <img src="{{ $portafolio->imagen }}" width="100%">
            </div>
        </div>

        <div class="form-group row">
            <label for="etiquetas" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
            <div class="col-md-6">
                <select name="categoria_id" class="form-control" id="sel1" required>
                    <option style='display: none' value="{{ $portafolio->categoria_id }}" selected>{{ $portafolio->categoria->name }}</option>
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
                <textarea id="detail" style="height:150px" class="form-control" name="detail" placeholder="Detail" required>{{ $portafolio->detail }}</textarea>
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