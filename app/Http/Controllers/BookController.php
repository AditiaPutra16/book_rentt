<?php

namespace App\Http\Controllers;

use App\Models\Book; // Impor kelas Book

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book', ['books' => $books]);
        
    }
    public function add() {
       return view('book-add');
    }

    public function store(Request $request) {
        dd($request->all());
     }
}
