<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function createLibrarianForm()
    {
        return view('admin.create_librarian');
    }

    public function storeLibrarian(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'librarian'
        ]);

        return "Librarian created successfully";
    }

    // 🔥 THIS WAS MISSING
    public function dashboard()
    {
        $users = User::all();
        $books = Book::all();
        $borrows = Borrow::all();

        return view('admin.dashboard', compact('users', 'books', 'borrows'));
    }
}