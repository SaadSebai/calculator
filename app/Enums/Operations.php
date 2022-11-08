<?php

namespace App\Enums;

/**
 * Basic operations
 */
enum Operations: string
{
    case Addition       = 'addition';
    case Subtraction    = 'subtraction';
    case Multiplication = 'multiplication';
    case Division       = 'division';
}
