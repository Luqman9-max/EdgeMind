<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Http\Requests\Admin\BookRequest;
use App\Helpers\ActivityLogger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query()->with('admin');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('author', 'like', "%{$search}%")
                  ->orWhereHas('admin', function ($q) use ($search) {
                      $q->where('name', 'like', "%{$search}%");
                  });
            });
        }

        // Status filter
        if ($request->filled('filter')) {
            switch ($request->filter) {
                case 'published':
                    $query->where('is_published', true);
                    break;
                case 'drafts':
                    $query->where('is_published', false);
                    break;
                case 'featured':
                    $query->where('is_featured', true);
                    break;
            }
        }

        // Advanced filters
        if ($request->filled('year')) {
            $query->where('year', $request->year);
        }
        if ($request->filled('category')) {
            $query->where('category', 'like', "%{$request->category}%");
        }

        // Sorting
        $sort_by = $request->get('sort_by', 'created_at');
        $sort_dir = $request->get('sort_dir', 'desc');
        $allowedSorts = ['created_at', 'title', 'year', 'sort_order'];

        if (in_array($sort_by, $allowedSorts)) {
            $query->orderBy($sort_by, $sort_dir);
        } else {
            $query->latest();
        }

        $books = $query->paginate(10)->withQueryString();

        $filter_years = Book::select('year')->distinct()->orderBy('year', 'desc')->pluck('year');
        $filter_categories = Book::select('category')->distinct()->orderBy('category')->pluck('category');

        return view('admin.books.index', compact('books', 'filter_years', 'filter_categories'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(BookRequest $request)
    {
        $data = $request->validated();
        $data['admin_id'] = Auth::guard('admin')->id();

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('books', 'public');
            $data['cover_image'] = $path;
        }

        $book = Book::create($data);
        ActivityLogger::log('created', "Added new book: {$book->title}", $book);

        return redirect()->route('admin.books.index')->with('success', 'Book created successfully.');
    }

    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    public function update(BookRequest $request, Book $book)
    {
        $data = $request->validated();

        if ($request->hasFile('cover_image')) {
            if ($book->cover_image && Storage::disk('public')->exists($book->cover_image)) {
                Storage::disk('public')->delete($book->cover_image);
            }
            $path = $request->file('cover_image')->store('books', 'public');
            $data['cover_image'] = $path;
        }

        $book->update($data);
        ActivityLogger::log('updated', "Updated details for book: {$book->title}", $book);

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $title = $book->title;

        if ($book->cover_image && Storage::disk('public')->exists($book->cover_image)) {
            Storage::disk('public')->delete($book->cover_image);
        }

        $book->delete();
        ActivityLogger::log('deleted', "Deleted book: {$title}", null);

        return redirect()->route('admin.books.index')->with('delete', 'Book deleted successfully.');
    }
}
