<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // READ: Menampilkan semua data genre
    public function index()
    {
        return response()->json(Genre::all());
    }

    // CREATE: Menambah data genre baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $genre = Genre::create($request->all());
        return response()->json($genre, 201);
    }

    // SHOW: Menampilkan data berdasarkan ID
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        return response()->json($genre);
    }

    // UPDATE: Memperbarui data genre
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $genre->update($request->all());
        return response()->json($genre);
    }

    // DESTROY: Menghapus data genre
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $genre->delete();
        return response()->json(['message' => 'Genre deleted successfully']);
    }
}
