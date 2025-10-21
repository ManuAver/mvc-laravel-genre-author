<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = [
            ['id' => 1, 'name' => 'Action'],
            ['id' => 2, 'name' => 'Romance'],
            ['id' => 3, 'name' => 'Fantasy'],
            ['id' => 4, 'name' => 'Comedy'],
            ['id' => 5, 'name' => 'Horror'],
        ];

        return view('genre', compact('genres'));
    }
}
