<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AnneeScolaireControlleur;
use App\Http\Controllers\Backend\BulletinController;
use App\Http\Controllers\Backend\ClassesControlleur;
use App\Http\Controllers\Backend\CoursControlleur;
use App\Http\Controllers\Backend\EcoleControlleur;
use App\Http\Controllers\Backend\EleveControlleur;
use App\Http\Controllers\Backend\EnseignatControlleur;
use App\Http\Controllers\Backend\EvaluationControlleur;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\NoteControlleur;
use App\Http\Controllers\Backend\PasswordControlleur;
use App\Http\Controllers\Backend\ResponsableControlleur;
use App\Models\Notes;
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
    return view('layouts.frontend.home');
})->name('acceuil');
Route::get('/contact', function () {
    return view('layouts.frontend.pages.contact.index');
})->name('contact');
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

        // Enseignant
        Route::get('/add_enseignat/admin', [EnseignatControlleur::class, 'index'])->name('add_enseignat_admin');
        Route::post('/store_enseignat/admin', [EnseignatControlleur::class, 'store'])->name('store_enseignat_admin');
        
        // Evaluation
        Route::get('/add_evaluation/admin', [EvaluationControlleur::class, 'index'])->name('add_evaluation_admin');
        Route::post('/store_evaluation/admin', [EvaluationControlleur::class, 'store'])->name('store_evaluation_admin');
        
        // Notes
        Route::get('/add_note/admin', [NoteControlleur::class, 'index'])->name('add_note_admin');
        Route::get('/show_note', [NoteControlleur::class, 'show'])->name('show_note_eleve');
        Route::get('/show_note_parent', [NoteControlleur::class, 'showparent'])->name('showparent_note_eleve');
        Route::post('/store_note/admin', [NoteControlleur::class, 'store'])->name('store_note_admin');

        // Password
        Route::get('/add_password/admin', [PasswordControlleur::class, 'index'])->name('add_password_admin');
        Route::post('/store_password/admin', [PasswordControlleur::class, 'store'])->name('store_password_admin');

        // Message Responsable
        Route::get('/send_message_parent/admin', [MessageController::class, 'indexResponsableMessage'])->name('message_send_parent');
        Route::post('/store_message_parent/admin', [MessageController::class, 'storeResponsableMessage'])->name('store_message_parent_admin');
        
        //Show Message
        Route::get('/show_message_parent/{id}', [MessageController::class, 'show'])->name('show_message');

        // Message Parent
        Route::get('/send_message_responsable', [MessageController::class, 'indexParentMessage'])->name('message_send_responsable');
        Route::post('/store_message_responsable', [MessageController::class, 'storeParentMessage'])->name('store_message_responsable_admin');
        
        // Bulletin Eleve
        Route::get('/show_bulletin_eleve', [BulletinController::class, 'index'])->name('show_bulletin_eleve');
        
        // Bulletin parent
        Route::get('/show_bulletin_parent', [BulletinController::class, 'indexParent'])->name('show_bulletin_parent');
        
    }); 
});


