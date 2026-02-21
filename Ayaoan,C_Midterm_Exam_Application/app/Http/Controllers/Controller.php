<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controllers
{
    public function index()
    {
        $movies = [
            [
                'title' => 'Divergent',
                'genre' => 'Science Fiction',
                'price' => 350
            ],
            [
                'title' => 'The Artifice',
                'genre' => 'Sci-fi, Thriller',
                'price' => 300
            ],
            [
                'title' => 'Meet, Greet and Goodbye',
                'genre' => 'Drama, Family',
                'price' => 400
            ]
        ];

        return view('movies', compact('movies'));
    }
}