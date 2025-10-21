<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Get all authors
    public function index()
    {
        return response()->json(Author::all());
    }

    // Create new author
    public function store(Request $request)
    {
        $author = Author::create($request->all());
        return response()->json($author, 201);
    }
}
