<?php

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Category::all();
    $books = Book::all();
    $authors = Author::all();
    return view('welcome', compact('categories', 'books', 'authors'));
});
