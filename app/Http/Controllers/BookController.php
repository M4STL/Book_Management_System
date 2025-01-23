<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function loadAllBooks(){
        $all_books = Book::all();
        return view('books', compact('all_books'));
    }

    public function loadAddBookForm(){
        
        return view('add-book');
    }

    public function AddBook(Request $request)
    {
        // Validate input
        $request->validate([
            'book_no' => 'required|string|max:10',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|digits:4'
        ]);

        // Save to database
        Book::create([
            'book_no' => $request->input('book_no'),
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'published_year' => $request->input('published_year'),
        ]);

        // Redirect or return response
        return redirect()->back()->with('success', 'Book added successfully!');
    }

    //Delete a book
    public function deleteBook($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('books')->with('success', 'Book deleted successfully!');
    }

     // Edit a book
     public function editBook($id)
     {
         $book = Book::find($id);
         return view('edit-book', compact('book'));
     }
 
     // Update a book
     public function updateBook(Request $request, $id)
     {
         $request->validate([
            'book_no' => 'required|string|max:10',
             'title' => 'required|string|max:255',
             'author' => 'required|string|max:255',
             'published_year' => 'required|digits:4',
         ]);
 
         $book = Book::find($id);
         $book->update($request->only(['book_no','title', 'author', 'published_year']));
 
         return redirect()->route('books')->with('success', 'Book updated successfully!');
     }
}
