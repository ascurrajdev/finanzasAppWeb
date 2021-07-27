@extends("adminlte::page")
@section("content")
    <div class="card">
        <div class="card-header">
            <h2>Listado de movimientos:</h2><br>
            @if(session("success"))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <a href="{{route('movimientos.crear')}}" class="btn btn-success btn-lg">Registrar Movimiento <i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body">
            <table class="table table-earning table-striped">
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th>Fecha</th>
                    </tr>
                </thead>    
                <tbody>
                    @foreach($movimientos as $movimiento)
                        <tr>
                            <td>{{$movimiento->concepto}}</td>
                            <td>Gs. {{number_format($movimiento->monto)}}</td>
                            <td>{{$movimiento->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    {{$movimientos->links()}}
                </tfoot>
            </table>
        </div>
    </div>
@endsection