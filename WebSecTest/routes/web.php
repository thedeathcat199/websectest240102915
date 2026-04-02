<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {

    // 🔥 UPDATED ADMIN DASHBOARD
    Route::get('/admin', [AdminController::class, 'dashboard']);

    // Librarian creation
    Route::get('/create-librarian', [AdminController::class, 'createLibrarianForm']);
    Route::post('/create-librarian', [AdminController::class, 'storeLibrarian']);

    // 📚 BOOK ROUTES (ADMIN)
    Route::get('/books', [BookController::class, 'index']);
    Route::get('/books/create', [BookController::class, 'create']);
    Route::post('/books/store', [BookController::class, 'store']);

    Route::get('/books/edit/{id}', [BookController::class, 'edit']);
    Route::post('/books/update/{id}', [BookController::class, 'update']);

    Route::get('/books/delete/{id}', [BookController::class, 'delete']);
});

/*
|--------------------------------------------------------------------------
| BORROW ROUTES (MEMBERS)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/borrow/{id}', [BorrowController::class, 'borrow']);
});

/*
|--------------------------------------------------------------------------
| Auth routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';