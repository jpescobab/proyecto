<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Proyecto;
use app\Models\OrdenCompra;
use app\Models\Contrato;



class Detalledte extends Model
{
    use HasFactory;

    protected $table = 'detalledtes';

    protected $fillable = [
        'dte_id',
        'tipo',
        'cliente_id',
        'periodoconsumo',
        'lecturaanterior',
        'lecturaactual',
        'consumo',
        'contrato_id',
        'ordencompra_id',
        'proyecto_id',
    ];

    public function dte()
    {
        return $this->belongsTo(Dtes::class, 'dte_id');
    }

    // public function cliente()
    // {
    //  //   return $this->belongsTo(ClientesMedidores::class, 'cliente_id');
    // }

    // public function contrato()
    // {
    //   //  return $this->belongsTo(Contrato::class, 'contrato_id');
    // }

    // public function ordenCompra()
    // {
    // //    return $this->belongsTo(OrdenCompra::class, 'ordencompra_id');
    // }

    // public function proyecto()
    // {
    //     return $this->belongsTo(Proyecto::class, 'proyecto_id');
    // }
   
}
