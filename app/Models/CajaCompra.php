<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CajaCompra extends Model
{
    use HasFactory;
    public function Caja(){
        return $this->belongsTo(Caja::class);
    }
    public function Compra(){
        return $this->belongsTo(Compra::class);
    }
}
 