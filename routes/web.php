<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReviewController;
use App\Models\Film;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::GET('/login', function () {
    return view('login');
});

Route::GET('/register', function () {
    return view('register');
});

Route::GET('/about', function () {
    return view('about');
});

Auth::routes();

Route::GET('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::post('/kategori',[KategoriController::class,'store'])->name('kategori.store');
Route::get('/kategori',[KategoriController::class,'index'])->name('kategori.index');
Route::get('/kategori/create',[KategoriController::class,'create'])->name('kategori.create');
Route::get('/kategori/{id}/edit',[KategoriController::class,'edit'])->name('kategori.edit');
Route::get('/kategori/{id}',[KategoriController::class,'show'])->name('kategori.show');
Route::put('/kategori/{id}',[KategoriController::class,'update'])->name('kategori.update');
Route::delete('/kategori/{id}',[KategoriController::class,'destroy'])->name('kategori.destroy');


Route::get('/film',[FilmController::class,'index'])->name('film.index');
Route::get('/film/adminidx',[FilmController::class,'adminidx'])->name('film.adminidx');
Route::get('/film/create',[FilmController::class,'create'])->name('film.create');
Route::post('/film',[FilmController::class,'store'])->name('film.store');
Route::get('/film/{id}/edit',[FilmController::class,'edit'])->name('film.edit');
Route::put('/film/{id}',[FilmController::class,'update'])->name('film.update');
Route::delete('/film/{id}',[FilmController::class,'destroy'])->name('film.destroy');
Route::get('/film/{id}',[FilmController::class,'show'])->name('film.show');


Route::get('/genre',[GenreController::class,'index'])->name('genre.index');
Route::get('/genre/create',[GenreController::class,'create'])->name('genre.create');
Route::get('/genre/{id}',[GenreController::class,'show'])->name('genre.show');
Route::post('/genre',[GenreController::class,'store'])->name('genre.store');
Route::get('/genre/{id}/edit',[GenreController::class,'edit'])->name('genre.edit');
Route::put('/genre/{id}',[GenreController::class,'update'])->name('genre.update');
Route::delete('/genre/{id}',[GenreController::class,'destroy'])->name('genre.destroy');

Route::get('/search',[SearchController::class,'index'])->name('film.search');
Route::get('/search/action',[SearchController::class,'search'])->name('search.action');

Route::post('/review',[ReviewController::class,'store'])->name('review.store');
Route::delete('/review/{id}',[ReviewController::class,'destroy'])->name('review.destroy');





