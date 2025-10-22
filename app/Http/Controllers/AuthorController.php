<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // READ: Menampilkan semua data author
    public function index()
    {
        return response()->json(Author::all());
    }

    // CREATE: Menambah data author baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $author = Author::create($request->all());
        return response()->json($author, 201);
    }

    // SHOW: Menampilkan data berdasarkan ID
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        return response()->json($author);
    }

    // UPDATE: Memperbarui data author
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $author->update($request->all());
        return response()->json($author);
    }

    // DESTROY: Menghapus data author
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $author->delete();
        return response()->json(['message' => 'Author deleted successfully']);
    }
}
