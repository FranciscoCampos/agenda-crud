<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "agendas";

    protected $fillable = ['nombre','apellido','email','avatar','grupo'];
}
