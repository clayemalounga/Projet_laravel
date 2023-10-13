<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Accueil;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Contact;
use App\Http\Controllers\ProduitControler;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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
Route::get('/accueil',[Accueil::class,'home'])->name('home');
Route::get('/a-propos',[About::class,'about'])->name('about');
Route::get('/contact/{num}/me/{text}',[Contact::class,'contact'])->name('contact');
Route::get('/users', [UserController::class,'listeUsers'])->name('users');
Route::resource('/articles',ArticleController::class);
Route::resource('/produits',ProduitControler::class);