<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $primaryKey = 'item';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'item',
        'nombre',
        'descripcion',
    ];

    public function getRouteKeyName()
    {
        return 'item';
    }


    public function catalogos()
    {
        return $this->hasMany(Catalogo::class, 'item', 'item');
    }
}
