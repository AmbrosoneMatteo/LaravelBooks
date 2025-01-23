<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::all();
        return view('list-book', compact('books'));
    }

    public function listByCategory($category): View {
        $books = Book::where('category_id', $category)->get();
        return view('list-book', compact('books', ));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('create/create-book', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request): RedirectResponse
    {
//        dd($request);
        $book = Book::create($request->validated());
        $request->image_path->storeAs( 'copertine', $book->id, 'public');
        $book->image_path = $book->id;
        $book->save();
        return redirect()->route('books.index')->with('success', 'Author created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): View
    {
        $author = Author::all()->find($book->author_id);
        $category = Category::all()->find($book->category_id);
        return view('detail/detail-book', compact('book', 'author', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('edit/edit-book', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());

        return redirect()->route('home')->with('success', 'libro ' . $book->title . ' modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted');
    }
}
