<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::with('reviews')->paginate(10);
        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        $book->load('reviews.user');
        return view('books.show', compact('book'));
    }

}
