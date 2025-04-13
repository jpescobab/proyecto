<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cfinanciero extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional si sigue la convención)
    protected $table = 'cfinancieros';

    // Clave primaria personalizada
    protected $primaryKey = 'cfinanciero';

    // Indicar que la clave no es autoincremental
    public $incrementing = false;

    // Tipo de la clave primaria
    protected $keyType = 'string';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'cfinanciero',
        'nombre',
    ];

    // Relación con la tabla de centros de costo
    
    public function ccostos()
    {
        return $this->hasMany(Ccosto::class, 'cfinanciero', 'cfinanciero');
    }

    // (Opcional) Método de presentación para mostrar nombre con código
    public function getNombreCompletoAttribute()
    {
        return "{$this->cfinanciero} - {$this->nombre}";
    }
}
