<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    // Recupera tutti gli attori
    public function index()
    {
        $actors = Actor::all();
        //return response()->json($actors);
        return view('actors', compact('actors'));
    }

    // Recupera un attore specifico per ID con i suoi film
    public function show($id)
    {
        $actor = Actor::with('films')->find($id);

        if (!$actor) {
            //return response()->json(['message' => 'Attore non trovato'], 404);
            return redirect('/actors')->with('error', 'Attore non trovato');
        }

        //return response()->json($actor);
        return view('actor_details', compact('actor'));
    }
}

