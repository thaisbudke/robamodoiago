<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\eventos;
use App\atletas;

class esportes extends Model
{
    protected $table='esportes';

    public function evento()
    {
        return $this->belongsTo(eventos::class,'evento_id'); //pertence a
    }


    public function atletas()
    {
        return $this->hasMany(atletas::class,'esportes_id');//tem muitos atletas
    }
}
