<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class CustomerFilter extends ApiFilter {

    //Parámetros a Filtrar
    protected $safeParams = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
    ];

    //Mapeo de Columnas
    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    //Mapeo de operadores
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];

}
