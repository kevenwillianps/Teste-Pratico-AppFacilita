<?php

namespace App\Enums;

enum StatusLivro : string
{

    // Defino os casos
    case DISPONIVEL = 'disponivel';
    CASE EMPRESTADO = 'emprestado';

    // Retorno os casos
    public static function getOptions(): array
    {
        
        return [
            self::DISPONIVEL->value => 'Disponível',
            self::EMPRESTADO->value => 'Emprestado'
        ];

    }
    
}
