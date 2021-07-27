<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaContable extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre"
    ];

    public function movimientos(){
        return $this->hasMany("App\Models\Movimiento");
    }
}
