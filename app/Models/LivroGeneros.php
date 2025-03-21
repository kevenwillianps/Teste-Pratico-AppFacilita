<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LivroGeneros extends Model
{

    // Habilita a inserção dos dados em massa
    protected $fillable = ['livro_id', 'genero_id'];

}
