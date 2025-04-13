<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';
    protected $primaryKey = 'rutproveedor';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'rutproveedor',
        'nombre',
        'correo',
        'direccion',
        'contacto',
        'imagen',
    ];

    public function getRouteKeyName()
    {
        return 'rutproveedor';
    }

    public function clientesmedidores(): HasMany
    {
        return $this->hasMany(Clientemedidor::class, 'rutproveedor', 'rutproveedor');
    }
}
