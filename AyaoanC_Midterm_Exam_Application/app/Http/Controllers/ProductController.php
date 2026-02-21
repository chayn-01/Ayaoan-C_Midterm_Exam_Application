<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Divergent', 'genre' => 'Science Fiction', 'price' => 350],
            ['title' => 'Meet, Greet and Goodbye', 'genre' => 'Romance', 'price' => 300],
            ['title' => 'The Great Hack', 'genre' => 'Documentary', 'price' => 250],
        ];

        return view('movies', compact('movies'));
    }
}