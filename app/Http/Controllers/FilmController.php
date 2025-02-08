<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        //return response()->json($films);
        return view('films', compact('films'));
    }

    public function show($id)
    {
        $film = Film::with(['actors', 'categories'])->find($id);

        if (!$film) {
            //return response()->json(['message' => 'Film non trovato'], 404);
            return redirect('/films')->with('error', 'Film non trovato');
        }

        //return response()->json($film);
        return view('film_details', compact('film'));
    }
}
