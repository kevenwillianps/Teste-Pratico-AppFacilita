<?php

namespace App\Enums;

enum StatusEmprestimo : string
{

    // Defino os casos
    case ATRASADO = 'atrasado';
    CASE DEVOLVIDO = 'devolvido';

    // Retorno os casos
    public static function getOptions(): array
    {
        
        return [
            self::ATRASADO->value => 'Atrasado',
            self::DEVOLVIDO->value => 'Devolvido'
        ];

    }
    
}
