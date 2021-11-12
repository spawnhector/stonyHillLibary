<?php

use App\Http\Controllers\librarianController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.index.body');
})->name('home');

Route::get("/member", [memberController::class, 'index'])->name('Member');
Route::get("/librarian", [librarianController::class, 'index'])->name('Librarian');

Route::post("/logout", function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');