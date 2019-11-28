<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\esportes;

class atletas extends Model
{
    protected $table='atletas';

    public function esporte()
    {
        return $this->belongsTo(esportes::class,'esportes_id'); //pertence a
    }
}
