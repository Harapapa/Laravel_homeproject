<?php

namespace App\Enums;

enum UserRoles: string
{
    case ADMIN = 'admin';
    case USER = 'user';

    public static function values(): array
    {
        return array_column(static::cases(), 'value', 'value');
    }
}