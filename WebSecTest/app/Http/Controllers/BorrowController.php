<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrow;

class BorrowController extends Controller
{
    public function borrow($id)
    {
        $book = Book::find($id);

        if ($book->copies <= 0) {
            return "Book Currently Unavailable";
        }

        Borrow::create([
            'user_id' => auth()->id(),
            'book_id' => $book->id
        ]);

        $book->copies -= 1;
        $book->save();

        return "Book Borrowed Successfully";
    }
}