<?php

namespace App\services;

use App\Enums\Operations;

class CalculatorService
{
    /**
     * Basic calculation
     *
     * @param float $first_argument
     * @param float $second_argument
     * @param string $operator
     *
     * @return float|null
     */
    public function calculat(float $first_argument, float $second_argument, string $operator): float|null
    {
        return match ($operator) {
            Operations::Addition->value        => $first_argument + $second_argument,
            Operations::Subtraction->value     => $first_argument - $second_argument,
            Operations::Multiplication->value  => $first_argument * $second_argument,
            Operations::Division->value        => $second_argument != 0 ? $first_argument / $second_argument : null,
        };
    }
}
