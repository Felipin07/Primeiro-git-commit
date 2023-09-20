<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\TwoController;
use App\Http\Controllers\TesteController;

    

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/welcome', function () {

    $pdf = Pdf::loadView('welcome');
    return $pdf->download('invoice.pdf');

});


Route::get('/desafio', function () {
    return view('desafio');

});


Route::get('/sobre', function () {
    return view('sobre');

});

Route::get('/treino', function () {
    return view('treino');

});


Route::get('/main', function () {
    return view('main');

});

Route::get('/nt', function () {
    return view('nt');

});


Route::get('/tworelatorio', [TwoController::class, 'ips']);

Route::get('/tworelatorio', [TwoController::class, 'ips']);

Route::get('/relatorio', [RelatorioController::class, 'pessoas']);

Route::get('/pessoa', [PessoaController::class, 'index']);

Route::post('/pessoa/cadastrar', [PessoaController::class, 'cadastrar']);

Route::get('/teste', [PessoaController::class, 'index']);

Route::post('/teste/cadastrar', [PessoaController::class, 'cadastrar']);

Route::get('/game', [GameController::class, 'index']);

Route::post('/game/guess', [GameController::class, 'guess']);














 








