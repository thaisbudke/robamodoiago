<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\esportes;

class eventos extends Model
{
    protected $table='eventos';

    public function esportes()
    {
        return $this->hasMany(esportes::class,'evento_id');
    }
}
