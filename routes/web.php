<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function(){

    $saluto = 'Hello Word';
    $altro_saluto = 'buone feste';



    return view('homepage', compact('saluto', 'altro_saluto'));
});

Route::get('/cicli', function(){

    $nome_page = 'CICLI';

    return view('cicli', compact('nome_page'));
});

// Route::get('/', function () {
//     return view('welcome');
// });
