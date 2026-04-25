<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::where('is_published', true)
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('public.catalog', compact('books'));
    }

    public function show($slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();

        $relatedBooks = Book::where('id', '!=', $book->id)
            ->where('is_published', true)
            ->latest()
            ->take(4)
            ->get();

        return view('public.book-detail', compact('book', 'relatedBooks'));
    }
}
