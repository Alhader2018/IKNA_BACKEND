<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProduitResource;
use App\Models\Produit;
use App\Models\Cours;
use App\Models\IknaMessage;
use  App\Http\Controllers\ProduitController;
use  App\Http\Controllers\UtilisateurController;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\CoursController;
use  App\Http\Controllers\LigneCoursController;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\IknaMessageController;
use App\Http\Requests;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    $path = storage_path();
    return view('welcome');
});
*/




Route::middleware(['cors'])->group(function () {
    Route::apiResource('produits',ProduitController::class);
    Route::apiResource('iknamessage',IknaMessageController::class);
    Route::get('iknamessage/:id', [IknaMessageController::class, 'index']);
});



Route::middleware(['auth'])->group(function () {
   // Route::get('/', [AdminController::class, 'indexMessage']);
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/:id', [AdminController::class, 'indexMessage']);
    Route::get('/cours', [CoursController::class, 'index'])->name('index_cours');
    Route::get('/cours/voir/{id}', [CoursController::class, 'show'])->name('voir_cours');
    Route::get('/cours/create/', [CoursController::class, 'create'])->name('create_cours');
    Route::post('/cours/create/', [CoursController::class, 'store'])->name('store_cours');
    Route::get('/cours/edit/{id}', [CoursController::class, 'edit'])->name('edit_cours');
    Route::post('/cours/update/', [CoursController::class, 'update'])->name('update_cours');
    // Ligne Cours
    Route::get('/lignecours/create/{cours_id}', [LigneCoursController::class, 'create'])->name('create_lignecours');
    Route::post('/lignecours/create/', [LigneCoursController::class, 'store'])->name('store_lignecours');
    Route::get('/lignecours/edit/{id}', [LigneCoursController::class, 'edit'])->name('edit_lignecours');
    Route::post('/lignecours/update/', [LigneCoursController::class, 'update'])->name('update_lignecours');
    Route::post('/lignecours/delete/', [CoursController::class, 'destroy'])->name('destroy_cours');
    // Utilisateur
    Route::get('/utilisateur', [UtilisateurController::class, 'index'])->name('index_utilisateur');
    Route::get('/utilisateur/edit/{id}', [UtilisateurController::class, 'edit'])->name('edit_utilisateur');
    Route::post('/utilisateur/edit/', [UtilisateurController::class, 'update'])->name('update_utilisateur');
    //Message
    Route::get('message', [IknaMessageController::class, 'show']);
    Route::get('chat/{id}', [IknaMessageController::class, 'chat']);
    Route::get('/gmail', function () {
        return Socialite::driver('google')->redirect();
    });
    Route::get('/callback', function (Request $request) {
        $user = Socialite::driver('google')->user();
    });

});

Auth::routes();



