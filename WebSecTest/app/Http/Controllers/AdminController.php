<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
}