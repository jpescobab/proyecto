<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Ccosto extends Model
{
    use HasFactory;

    protected $table = 'ccostos';
    protected $primaryKey = 'ccosto';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ccosto',
        'nombre',
        'cfinanciero',
    ];

    // Relación con Cfinanciero (N:1)
    public function cfinanciero()
    {
        return $this->belongsTo(Cfinanciero::class, 'cfinanciero', 'cfinanciero');
    }

    public function clientesmedidores(): HasMany
    {
        return $this->hasMany(Clientemedidor::class, 'ccosto', 'ccosto');
    }

    
}
