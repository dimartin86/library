<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BooksController extends Controller
{
    public function index(){
        $books = Http::get('https://openlibrary.org/search.json?author=tolkien');

        $arrBooks = $books->json();

        return view('pages.library', compact('arrBooks'));
    }
}
