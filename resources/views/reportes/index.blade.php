@extends('layouts.admin')

@section('content')
<div class="container">

    <a href="{{route('descargarPDF')}}"><button type="button" class="btn btn-info">imprimir</button></a>

    @if(Auth::check())
    @if(Auth::user()->role_id == 1)
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
    @endif
    @endif
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>categoria_id</th>
            <th>title</th>
            <th>resourceId</th>
            <th>start</th>
            <th>end</th>
        </tr>
        @foreach($rese as $prueba)
        <tr>
            <th>{{$prueba->id}}</th>
            <th>{{$prueba->categoria->name}}</th>
            <th>{{$prueba->title = $prueba->servicio->title}}</th>
            <th>{{$prueba->experto->title}}</th>
            <th>{{$prueba->start}}</th>
            <th>{{$prueba->end}}</th>
        </tr>
        @endforeach
    </table>
    <hr>
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var bar2 = <?php echo $bar ?>;
    var tatt2 = <?php echo $tatt ?>;


    var data = google.visualization.arrayToDataTable([
        ['cita', 'Barberia', 'Tattoo'],
        ['CITAS', bar2, tatt2],
    ]);

    var options = {
        title: 'Reporte de citas',
        hAxis: {
            title: 'Citas agendadas ',
            titleTextStyle: {
                color: '#333'
            }
        },
        vAxis: {
            minValue: 0
        }
    };

    var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}
</script>
@endsection