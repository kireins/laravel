<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//GET film by id
Route::get('film/{id}', [FilmController::class, 'getFilmById']);

//GET all films
Route::get('films', [FilmController::class, 'getAllFilms']);

//POST film card
Route::post('films', [FilmController::class, 'createCard' ]);

//POST update card
Route::put('film/{id}', [FilmController::class, 'updateCard']);

//DELETE film
Route::delete('film/{id}', [FilmController::class, 'deleteFilm']);
