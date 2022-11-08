<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use App\services\CalculatorService;

class CalculatorController extends Controller
{
    /**
     * Return Calculator page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('calculator');
    }

    /**
     * Calculat using two argument
     *
     * @param CalculatorRequest $request
     * @param CalculatorService $calculatorService
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function calculat(CalculatorRequest $request, CalculatorService $calculatorService)
    {
        $result = $calculatorService->calculat(
            first_argument:     $request->first_argument,
            second_argument:    $request->second_argument,
            operator:           $request->operator
        );

        return view('calculator', ['result' => $result]);
    }
}
