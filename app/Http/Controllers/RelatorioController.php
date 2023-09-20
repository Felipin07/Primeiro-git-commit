<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
    

    public function pessoas(){

        $pessoas = DB::table('pdf_data')->get();   
    

       // return view('relatorio_vendas',['pessoas' => $pessoas]);

        $pdf = Pdf::loadView('relatorio_vendas',['pessoas' => $pessoas]);
        return $pdf->stream('Felipe.pdf');
    

    }

}

