<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TwoController extends Controller {
    public function ips() {
        $ips = [
            [
                "nome" => "Felipe",
                "idade" => 16,
                "ip" => "127.0.0.1", 
            ],
        ];
    
        $pdf = PDF::loadView('layouts.tworelatorio', ['ips' => $ips]); 
        return $pdf->stream('Felipe.pdf');
    }
}
  



