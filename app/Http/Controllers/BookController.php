<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book', ['books' => $books]);
    }

<<<<<<< HEAD
    public function store (Request $request) {
=======
    public function add()
    {
        return view('book-add');
    }

    public function store(Request $request)
    {
>>>>>>> 257d765d0e0ae22662c9207727a31e1309234c92
        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:255',
            'title' => 'required|max:255',
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
<<<<<<< HEAD
        }
            $request['cover'] = $newName;
            $books = Book::create($request->all());
            return redirect('books')->with('status','Book Added Successfully');
     }
}
=======
        };

        $request['cover'] = $newName;

        $book = Book::create($request->all());
        return redirect('books')->with('status','Book Added Successfully');
>>>>>>> 257d765d0e0ae22662c9207727a31e1309234c92
