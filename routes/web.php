<?php

use Illuminate\Support\Facades\Route;
use App\Models\Articles;

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

Route::get('/', function () {
    return view('welcome', [
        'articles' => Articles::all()
    ]);
});

Route::get('/article/{id}', function ($id) {
    // dd($id);
    return view('article', [
        'article' => Articles::find($id)
    ]);
});
 


Route::get('/json', function () {
    return Response('{"id": 1}')
        ->header("Content-Type", "text/plain");
});

