<?php

use Illuminate\Support\Facades\Route;
use App\Models\Film;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\DB;

Route::get('/test-db', function () {
    $films = DB::connection('mysql_sakila')->table('film')->limit(5)->get();
    return response()->json($films);
}); // test connessione

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/films', function () {
    // Recupera tutti i film dal database Sakila
    $films = Film::all();
    return response()->json($films);
});

Route::get('/films/{id}', function ($id) {
    // Recupera un film specifico per ID, includendo anche gli attori e le categorie
    $film = Film::with(['actors', 'categories'])->find($id);

    if (!$film) {
        return response()->json(['message' => 'Film non trovato'], 404);
    }

    return response()->json($film);
});*/

// Rotte per i Films
Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/{id}', [FilmController::class, 'show']);

// Rotte per gli Attori
Route::get('/actors', [ActorController::class, 'index']);
Route::get('/actors/{id}', [ActorController::class, 'show']);

// Rotte per le Categorie
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

