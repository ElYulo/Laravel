<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //Busca en la base de datos la tabla y se conecta en automatico
    //protected $table = 'usuarios';
    use HasFactory;
}
