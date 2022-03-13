@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Citas.</h1>

    <a class="btn btn-success" href="{{ route('citas.create') }}" style="float: right;">Agregar Cita</a>

    @if ($message = Session::get('success'))
    <div class="col-sm-10">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    @if ($message = Session::get('warning'))
    <div class="col-sm-10">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    @if ($message = Session::get('danger'))
    <div class="col-sm-10">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif

    @if(Auth::check())
    @if(Auth::user()->role_id == 1)
    <br>
    <br>
    <hr>
    <div id='calendar'></div>
    <hr>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>categoria - Servicio</th>
            <th>Profecional</th>
            <th>Fecha Inicio - Fecha Fin</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Admin</th>
        </tr>
        @foreach($rese as $prueba)
        <tr>
            <th>{{$prueba->id}}</th>
            <th>{{$prueba->categoria->name}} <br> {{$prueba->title = $prueba->servicio->title}}</th>
            <th>{{$prueba->experto->title}}</th>
            <th>{{$prueba->start}} <br> {{$prueba->end}}</th>
            <th>{{$prueba->usuario->name}}</th>
            <th>{{$prueba->status}}</th>
            <td>
                <a class="btn btn-info" href="{{ route('citas.show',$prueba->id) }}"><i class="bi bi-eye-fill"></i></a>
                <a class="btn btn-primary" href="{{ route('citas.edit',$prueba->id) }}"><i
                        class="bi bi-pencil-fill"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
    <hr>
    @elseif(Auth::user()->role_id == 2)
    <br>
    <br>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>categoria</th>
            <th>Servicio</th>
            <th>Profecional</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Estado</th>
        </tr>
        @foreach($rese as $prueba) 
        <tr>
            <th>{{$prueba->id}}</th>
            <th>{{$prueba->categoria->name}}</th>
            <th>{{$prueba->title = $prueba->servicio->title}}</th>
            <th>{{$prueba->experto->title}}</th>
            <th>{{$prueba->start}}</th>
            <th>{{$prueba->end}}</th>
            <th>{{$prueba->status}}</th>
        </tr>
        @endforeach
    </table>
    <hr>
    @endif
    @endif
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.1/main.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.1/main.css">


<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var prueba1 = <?php echo $rese ?>;
    console.log(prueba1);

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',

        locale: "es",

        headerToolbar: {
            left: 'prev,next,today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek,resourceTimeGridDay,resourceTimeGridFourDay'
        },
        views: {
            resourceTimeGridFourDay: {
                type: 'resourceTimeGrid',
                duration: {
                    days: 4
                },
                buttonText: '4 days'
            }
        },
        resources: <?php echo $expe ?>,

        events: <?php echo $rese ?>
    });
    calendar.render();

});
</script>

@endsection