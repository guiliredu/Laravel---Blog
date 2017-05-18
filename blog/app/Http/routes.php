<?php

use App\Noticia;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $noticias = Noticia::orderBy('created_at', 'desc')->get();

    return view('noticias', [
        'noticias' => $noticias
    ]);
});

Route::get('/noticias', function () {
    $noticias = Noticia::orderBy('created_at', 'desc')->get();

    return view('noticias', [
        'noticias' => $noticias
    ]);
});