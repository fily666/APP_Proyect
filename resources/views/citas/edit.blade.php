@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar cita.</h1>

    <a class="btn btn-primary" href="{{ route('citas.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>


    <form action="{{ route('citas.update',$cita->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cita') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" value="{{ $cita->name }}" class="form-control" name="name" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="detail" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
            <div class="col-md-6">
                <textarea id="detail" style="height:150px" class="form-control" name="detail" placeholder="Detail" required>{{ $cita->detail }}</textarea>
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