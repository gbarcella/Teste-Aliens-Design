<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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
    return view('welcome');
});

//Pesquisar filmes por nome
Route::get('/search-movies', [MovieController::class, 'searchMovies'])->name('search-movies');

//Detalhes do filme via ID
Route::get('/movie-details/{id}', [MovieController::class, 'movieDetails'])->name('movie-details');