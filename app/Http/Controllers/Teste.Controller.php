<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    

    public function index(){
       
        return view('teste');

    }


    public function cadastrar(Request $request){

        
        $name = $request->input('name');
        $algarismo = $request->input('algarismo');
    
    

        DB::table('pdf_data')->insert([
            'name' => $name,
            'algarismo' => $algarismo,

        ]);

        return redirect('teste');

    }

}
