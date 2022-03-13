@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar cita.</h1>

    <a class="btn btn-primary" href="{{ route('citas.index') }}"><i class="bi bi-arrow-left-circle-fill"></i> Volver</a>

    <form action="{{ route('citas.update',$cita->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="etiquetas" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
            <div class="col-md-6">
                <select name="categoria_id" class="form-control" id="sel1" required disabled>
                    <option style='display: none' value="{{ $cita->categoria_id }}" selected>
                        {{ $cita->categoria->name }} </option>
                    <option value=""> ----- Seleccionar -----</option>
                    @foreach($cate as $categoria)
                    <option value="{{ $categoria['id'] }}">{{ $categoria['name'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="resourceId" class="col-md-4 col-form-label text-md-right">{{ __('Pofecional') }}</label>
            <div class="col-md-6">
                <select name="resourceId" class="form-control" id="sel1" required disabled>
                    <option style='display: none' value="{{ $cita->resourceId }}" selected>{{ $cita->experto->title }}
                    </option>
                    <option value=""> ----- Seleccionar -----</option>
                    @foreach($expe as $experto)
                    <option value="{{ $experto['id'] }}">{{ $experto['title'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Servicio') }}</label>
            <div class="col-md-6">
                <select name="title" class="form-control" id="title" onchange="SeleccionarServicio(this);" required
                    disabled>
                    <option style='display: none' value="{{ $cita->title }}" selected>{{ $cita->servicio->title }}
                    </option>
                    <option value=""> ----- Seleccionar -----</option>
                    @foreach($serv as $servicio)
                    <option value="{{ $servicio['id'] }}">{{ $servicio['title'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row" id="FechaInicio">
            <label for="start" class="col-md-4 col-form-label text-md-right">{{ __('Fecha inicio') }}</label>
            <div class="col-md-6">
                <input id="start" type="text" value="{{ $cita->start }}" class="form-control" name="start"
                    onchange="CalDuracionServ();" required readonly>
            </div>
        </div>

        <div class="form-group row" id="FechaFin">
            <label for="end" class="col-md-4 col-form-label text-md-right">{{ __('Fecha fin') }}</label>
            <div class="col-md-6">
                <input id="duracion_serv" type="text" value="{{ $cita->end }}" class="form-control" name="duracion_serv"
                    readonly>
            </div>
        </div>

        <div class="form-group row" id="DuracionServicio">
            <label for="duracion_serv"
                class="col-md-4 col-form-label text-md-right">{{ __('Duracion del Servicio ') }}</label>
            <div class="col-md-6">
                <input id="duracion_serv" type="text" value="{{ $cita->servicio->duracion }}" class="form-control"
                    name="duracion_serv" readonly>
            </div>
        </div>

        <div class="form-group row" id="DescripcionServicio">
            <label for="detalle_serv"
                class="col-md-4 col-form-label text-md-right">{{ __('Descripcion de Servicio ') }}</label>
            <div class="col-md-6">
                <textarea id="detalle_serv" style="height:100px" class="form-control" name="detalle_serv"
                    readonly>{{ $cita->servicio->detail  }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="etiquetas" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
            <div class="col-md-6">
                <select name="status" class="form-control" id="sel1" required>
                    <option style='display: none' value="{{ $cita->status }}" selected>{{ $cita->status }}</option>
                    <option value=""> ----- Seleccionar -----</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Desistio">Desistio</option>
                    <option value="Asistio"> Asistio</option>
                </select>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>

<script>
function SeleccionarServicio(nameSelect) {
    var val_servicio = nameSelect.options[nameSelect.selectedIndex].value;
    document.getElementById("DuracionServicio").style.display = val_servicio !== '' ? "" : 'none';
    document.getElementById("DescripcionServicio").style.display = val_servicio !== '' ? "" : 'none';
    document.getElementById("FechaInicio").style.display = val_servicio !== '' ? "" : 'none';
    document.getElementById("FechaFin").style.display = val_servicio !== '' ? "" : 'none';

    var consulta = <?php echo $serv ?>;
    const Servicio_select = consulta.find(consulta_servi => consulta_servi.id == val_servicio);

    document.getElementById("duracion_serv").value = Servicio_select.duracion + " Minutos";
    document.getElementById("detalle_serv").value = Servicio_select.detail;
    document.getElementById("start").value = "";
    document.getElementById("end").value = "";
}

function CalDuracionServ() {
    var val_hora_inicio = document.getElementById('start').value;

    var val_servicio = document.getElementById('title').value;
    var consulta = <?php echo $serv ?>;
    const Servicio_select = consulta.find(consulta_servi => consulta_servi.id == val_servicio);

    var duracion_serv = Servicio_select.duracion;

    //create a date with Moment.js
    var tiempo_servicio = moment(val_hora_inicio).add(duracion_serv, "m");

    //display the date
    val_hora_fin = tiempo_servicio.format("YYYY-MM-DDThh:mm");
    document.getElementById("end").value = val_hora_fin;
}

</script>
@endsection