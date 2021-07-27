@extends("adminlte::page")
@section("content")
<div class="card">
    <div class="card-header">
        <h2>Registrar movimiento:</h2>
    </div>
    <div class="card-body">
        <form action="{{route('movimientos.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="concepto">Concepto:</label>
                <input type="text" name="concepto" id="concepto" class="form-control" placeholder="Introduzca el concepto"/>
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="number" name="monto" id="monto" class="form-control" placeholder="Introduzca el monto"/>
            </div>
            <div class="form-group">
                <label for="cuentas">Cuenta:</label>
                <select name="cuenta_contable_id" class="form-control" id="cuentas">
                    <option value="" disabled selected>Introduzca una cuenta contable</option>
                    @foreach($cuentas as $cuenta)
                        <option value="{{$cuenta->id}}">{{$cuenta->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary btn-lg" type="submit">Guardar <i class="far fa-save"></i></button>
        </form>
    </div>
</div>
@endsection