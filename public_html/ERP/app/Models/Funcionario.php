<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table='funcionarios';
    protected $fillable = array('nome','cargo','cpf','fone','celular','endereco','numero','cidade','bairro','sexo','data_registro', 'email', 'celular');
    use HasFactory;
}
