<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Define a tabela associada ao modelo
    protected $table = 'produtos';

    // Define os atributos que podem ser atribuídos em massa
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade_estoque',
        'sku',
        'status',
        'imagem',
        'data_validade',
        'peso',
        'dimensoes',
        'codigo_barras'
    ];

    // Define os atributos que devem ser tratados como datas
    protected $dates = ['data_validade'];
}
