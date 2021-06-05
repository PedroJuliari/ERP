<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenServico extends Model
{
    use HasFactory;
    protected $table='orden_servicos';
    protected $fillable = array('id','processo_produtivo', 'observacao');
}
