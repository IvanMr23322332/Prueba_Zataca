<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\facturas;

class FacturasController extends Controller
{
    public function consultarImpagos(){
        $fields = facturas::where('pagada',false)
                ->where('fecha_factura','>',date('c', strtotime('-60 days')))
                ->count();
        $total = facturas::where('pagada',false)
                ->where('fecha_factura','>',date('c', strtotime('-60 days')))
                ->sum('total_factura');

        return view('resumenFacturas', ['total' => $total, 'fields' => $fields]);
    }
}
