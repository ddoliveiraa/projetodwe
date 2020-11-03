<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videoaula extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'url',
        'id_cadeira',
    ];
}
