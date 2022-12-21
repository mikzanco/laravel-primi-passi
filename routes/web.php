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

    $books = ['Harry Potter', 'Narnia', 'The Hunger Games', 'Persy Jackson'];

    return view('cicli', compact('nome_page', 'books'));
});

Route::get('/navbar', function(){

    $team = [
        [
            'name'=> 'Mirkp',
            'surname'=> 'Giobatta',
        ],
        [
            'name'=> 'Ugo',
            'surname'=> 'De Ughi',
        ],
        [
            'name'=> 'Francesco',
            'surname'=> 'Di Giovanni',
        ]
    ];

    return view('navbar', compact('team'));
});

// Route::get('/', function () {
//     return view('welcome');
// });
