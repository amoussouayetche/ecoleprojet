<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AnneeScolaireControlleur;
use App\Http\Controllers\Backend\ClassesControlleur;
use App\Http\Controllers\Backend\CoursControlleur;
use App\Http\Controllers\Backend\EcoleControlleur;
use App\Http\Controllers\Backend\EleveControlleur;
use App\Http\Controllers\Backend\ResponsableControlleur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('layouts.frontend.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function () {
        // Ecole
        Route::get('/add_ecole/admin', [EcoleControlleur::class, 'index'])->name('add_ecole_admin');
        Route::post('/store_ecole/admin', [EcoleControlleur::class, 'store'])->name('store_ecole_admin');

        // Annee
        Route::get('/add_annee/admin', [AnneeScolaireControlleur::class, 'index'])->name('add_annee_admin');
        Route::post('/store_annee/admin', [AnneeScolaireControlleur::class, 'store'])->name('store_annee_admin');

        // Responsable
        Route::get('/add_responsable/admin', [ResponsableControlleur::class, 'index'])->name('add_responsable_admin');
        Route::post('/store_responsable/admin', [ResponsableControlleur::class, 'store'])->name('store_responsable_admin');
        
        // Classes
        Route::get('/add_classe/admin', [ClassesControlleur::class, 'index'])->name('add_classe_admin');
        Route::post('/store_classe/admin', [ClassesControlleur::class, 'store'])->name('store_classe_admin');

        // Cours
        Route::get('/add_cours/admin', [CoursControlleur::class, 'index'])->name('add_cours_admin');
        Route::post('/store_cours/admin', [CoursControlleur::class, 'store'])->name('store_cours_admin');

        // Eleve
        Route::get('/add_eleve/admin', [EleveControlleur::class, 'index'])->name('add_eleve_admin');
        Route::post('/store_eleve/admin', [EleveControlleur::class, 'store'])->name('store_eleve_admin');

    });
});


