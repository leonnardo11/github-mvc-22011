<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    use HasFactory;

    protected $fillable = ['id',
                           'nome',
                           'descricao',
                           'preco'];

    protected $table = 'produtos';
}
