<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = 'contratos';

    protected $fillable = [
        'codigo',
        'licitacion',
        'tipo',
        'referencia',
        'fechainicio',
        'fechavencimiento',
        'razonsocial',
        'rut',
        'materia',
        'submateria',
        'proveedor_id',
        'licitacion_id',
        'estado',
    ];

    protected $casts = [
        'fechainicio' => 'date',
        'fechavencimiento' => 'date',
    ];

    // Relaciones
    // public function proveedor()
    // {
    //     return $this->belongsTo(Proveedor::class);
    // }

    public function licitacionRelacion()
    {
        return $this->belongsTo(Licitacion::class, 'licitacion_id');
    }
}
