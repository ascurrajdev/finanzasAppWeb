@extends("adminlte::page")
@section("content")
<div class="card">
    <div class="card-header">
        <h2>Registrar cuenta:</h2>
    </div>
    <div class="card-body">
        <form action="{{route('cuentas.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Introduzca el nombre"/>
            </div>
            <button class="btn btn-primary btn-lg" type="submit">Guardar <i class="far fa-save"></i></button>
        </form>
    </div>
</div>
@endsection