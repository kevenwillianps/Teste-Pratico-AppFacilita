<?php

namespace App\Enums;

enum StatusEmprestimo : string
{

    // Defino os casos
    case ATRASADO = 'atrasado';
    CASE DEVOLVIDO = 'devolvido';
    CASE EMPRESTADO = 'emprestado';

    // Retorno os casos
    public static function getOptions(): array
    {
        
        return [
            self::ATRASADO->value => 'Atrasado',
            self::DEVOLVIDO->value => 'Devolvido',
            self::EMPRESTADO->value => 'Emprestado',
        ];

    }
    
}
