<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Recupera tutte le categorie
    public function index()
    {
        $categories = Category::all();
        //return response()->json($categories);
        return view('categories', compact('categories'));
    }

    // Recupera una categoria specifica per ID con i suoi film
    public function show($id)
    {
        $category = Category::with('films')->find($id);

        if (!$category) {
            //return response()->json(['message' => 'Categoria non trovata'], 404);
            return redirect('/categories')->with('error', 'Categoria non trovata');
        }

        //return response()->json($category);
        return view('category_details', compact('category'));
    }
}

