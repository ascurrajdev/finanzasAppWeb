<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Movimiento,CuentaContable};

class MovimientosController extends Controller
{
    public function index(){
        $movimientos = Movimiento::paginate();
        return view("movimientos.listado",compact('movimientos'));
    }

    public function create(){
        $cuentas = CuentaContable::all();
        return view("movimientos.crear",compact("cuentas"));
    }

    public function store(Request $request){
        $request->validate([
            'concepto' => 'required|string',
            'monto' => 'required|numeric',
            'cuenta_contable_id' => 'required|exists:cuenta_contables,id'
        ]);

        Movimiento::create($request->all());
        return redirect()->route("movimientos.listado")->with([
            "success" => "El movimiento ha sido registrado exitosamente"
        ]);
    }
}
