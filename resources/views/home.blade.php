@extends('layouts.admin')

@section('content')
<div class="container" style="padding-top: 5%;">
    <div class="card">
        <div class="card-header">
            <h1>
                BIENVENIDOS
            </h1>

            <img src="img/logo-final2p.PNG" style="width:340px">

            <a href="{{route('descargarPDF')}}">imprimir</a>
        </div>
    </div>
</div>
@endsection