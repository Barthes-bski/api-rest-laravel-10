<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class InvoiceFilter extends ApiFilter {

    //Parámetros a Filtrar
    protected $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'gt', 'gte', 'lt', 'lte'],
        'paidDate' => ['eq', 'gt', 'gte', 'lt', 'lte'],
    ];

    //Mapeo de Columnas
    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_dated',
        'paidDate' => 'paid_dated'
    ];

    //Mapeo de operadores
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne'  => '!='
    ];

}
