<?php

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
    return view('welcome');
});
Route::get('/connexion', function () {
    return view('admin.home');
});

Route::get('inscription', function () {
    return view('auth.login');
});



Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('Categorie',App\Http\Controllers\CategorieController::class)->names('Categorie'); /*good */
    Route::get('/GererCategorie', [App\Http\Controllers\CategorieController::class, 'getGerer'])->name('GererCategorie');

    Route::resource('Ingredient',App\Http\Controllers\IngredientController::class)->names('Ingredient');
    Route::resource('Produit',App\Http\Controllers\ProduitController::class)->names('Produit');


    Route::resource('A-propos',App\Http\Controllers\AproposController::class)->names('A-propos');
    Route::resource('Social',App\Http\Controllers\SocialController::class)->names('Social');
    Route::resource('Porfolio',App\Http\Controllers\SocialController::class)->names('Porfolio');
    Route::resource('Service',App\Http\Controllers\SocialController::class)->names('Service');
    Route::resource('Competence',App\Http\Controllers\SocialController::class)->names('Competence');
    Route::resource('Temoignage',App\Http\Controllers\SocialController::class)->names('Temoignage');
    
    Route::resource('Contact',App\Http\Controllers\SocialController::class)->names('Contact');
    Route::resource('Tarif',App\Http\Controllers\SocialController::class)->names('Tarif');
});

