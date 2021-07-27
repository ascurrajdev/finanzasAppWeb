@extends("adminlte::page")
@section("content")
    <div class="card">
        <div class="card-header">
            <h2>Listado de cuentas:</h2><br>
            @if(session("success"))
                <div class="alert alert-success">{{session("success")}}</div>
            @endif
            <a href="{{route('cuentas.crear')}}" class="btn btn-success btn-lg">Registrar Cuenta <i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
            <table class="table table-earning table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>    
                <tbody>
                    @foreach($cuentas as $cuenta)
                        <tr>
                            <td>{{$cuenta->id}}</td>
                            <td>{{$cuenta->nombre}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    {{$cuentas->links()}}
                </tfoot>
            </table>
        </div>
    </div>
@endsection