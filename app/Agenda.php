<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'contactos';

    protected $fillable = ['nombre','telefono','email','descripcion'];

}
