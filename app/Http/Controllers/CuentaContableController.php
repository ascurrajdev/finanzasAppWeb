<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CuentaContable;

class CuentaContableController extends Controller
{
    public function index(){
        $cuentas = CuentaContable::paginate();
        return view("cuentas.listado",compact("cuentas"));
    }

    public function create(){
        return view("cuentas.crear");
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string',
        ]);
        CuentaContable::create($request->only('nombre'));
        return redirect()->route('cuentas.listado')->with([
            "success" => 'Se ha registrado la cuenta correctamente'
        ]);
    }
}
