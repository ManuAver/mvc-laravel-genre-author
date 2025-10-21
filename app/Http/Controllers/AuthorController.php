<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = [
            ['id' => 1, 'name' => 'J.K. Rowling'],
            ['id' => 2, 'name' => 'George R.R. Martin'],
            ['id' => 3, 'name' => 'Agatha Christie'],
            ['id' => 4, 'name' => 'Stephen King'],
            ['id' => 5, 'name' => 'Dan Brown'],
        ];

        return view('author', compact('authors'));
    }
}
