@extends('layout.plantilla')

@section("tituloPagina", "eliminar un registro")

@section('contenidop')
    <div class="card">
        <h5 class="card-header">Eliminar un predio!!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>Codigo_predio</th>
                    <th>Nombre_predio</th>
                    <th>Direccion</th>

                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $predios->codigo_predio }}</td>
                        <td>{{ $predios->nombre_predio }}</td>
                        <td>{{ $predios->direccion }}</td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('predios.destroyp', $predios->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("predios.indexp") }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span>Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span>Eliminar
                    </button>

                </form>
            </div>
            </p>

        </div>
    </div>

@endsection



