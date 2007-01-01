<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuarios';
    protected $fillable = array('id','nome', 'email', 'celular', 'ativo','senha','data_cadastro');
    use HasFactory;
}
