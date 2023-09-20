<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    

    public function index(){
       
        return view('pessoa');

    }


    public function cadastrar(Request $request){

        
        $name = $request->input('name');
        $department = $request->input('department');
    
        

        DB::table('pdf_data')->insert([
            'name' => $name,
            'department' => $department,

        ]);

        return redirect('pessoa');

    }

}
