<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'pais',
        'cep'  
    ];
}