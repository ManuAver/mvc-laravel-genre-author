<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Get all genres
    public function index()
    {
        return response()->json(Genre::all());
    }

    // Create new genre
    public function store(Request $request)
    {
        $genre = Genre::create($request->all());
        return response()->json($genre, 201);
    }
}
