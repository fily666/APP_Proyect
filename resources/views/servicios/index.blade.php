    @extends('layouts.admin')

    @section('content')
    <div class="container">
        <h1>Servicios.</h1>

        <a class="btn btn-success" href="{{ route('servicios.create') }}" style="float: right;">Agregar Servicio</a>

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

        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Fecha</th>
                <th>Acciónes</th>   
            </tr>
            @foreach($servicio as $servii)
            <tr>
                <th>{{$servii->id}} </th>
                <td>{{$servii->name}} </td>
                <td>{{$servii->precio}} </td>
                <td>{{$servii->categoria}} </td>
                <td>{{$servii->created_at}} </td>
                <td>
                    <a class="btn btn-info" href="{{ route('servicios.show',$servii->id) }}"><i class="bi bi-eye-fill"></i></a>
                    <a class="btn btn-primary" href="{{ route('servicios.edit',$servii->id) }}"><i class="bi bi-pencil-fill"></i></a>
                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-eraser-fill"></i></button>
                </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                            <h3>Esta seguro de eliminar el Servicio</h3>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('servicios.destroy',$servii->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Confirmar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </table>
        {!! $servicio->links() !!}
    </div>

    @endsection