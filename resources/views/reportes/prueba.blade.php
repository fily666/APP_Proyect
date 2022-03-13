<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORTE</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <h1>REPORTE DE SERVICIOS</h1>

    @if(Auth::check())
    @if(Auth::user()->role_id == 1)
    <hr>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>categoria_id</th>
                <th>title</th>
                <th>resourceId</th>
                <th>start</th>
                <th>end</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>

    <hr>
    @elseif(Auth::user()->role_id == 2)
    <hr>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>categoria_id</th>
                <th>title</th>
                <th>resourceId</th>
                <th>start</th>
                <th>end</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    <hr>
    @endif
    @endif
</body>

</html>