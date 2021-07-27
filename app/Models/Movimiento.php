<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        "cuenta_contable_id","concepto","monto"
    ];

    public function cuentaContable(){
        return $this->belongsTo("App\Models\CuentaContable","cuenta_contable_id");
    }
}
