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
use  App\Http\Controllers\GroupeController;
use  App\Http\Controllers\LigneCoursController;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\IknaMessageController;
use  App\Http\Controllers\RapportController;
use  App\Http\Controllers\ConseilPratiqueController;
use  App\Http\Controllers\UserResourceController;
use  App\Http\Controllers\ProfilResourceController;
use  App\Http\Controllers\SuggestionController;
use  App\Http\Controllers\ActualiteController;
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
    Route::get('/users_ressource', [IknaMessageController::class, 'user_ressource']);
    Route::get('iknamessage/:id', [IknaMessageController::class, 'index']);
    Route::get('cours_ressources', [CoursController::class, 'indexRessource']);
    Route::get('cours_ressources/{id}', [CoursController::class, 'showRessource']);
    Route::get('conseil_ressources', [ConseilPratiqueController::class, 'indexRessource']);
    Route::get('conseil_ressources', [ConseilPratiqueController::class, 'indexRessource']);
    Route::get('conseil_ressources/{id}', [ConseilPratiqueController::class, 'showRessource']);
    Route::post('suggestions', [SuggestionController::class, 'store']);
    Route::get('/actualites_ressource', [ActualiteController::class, 'index_ressource']);
    Route::get('/actualites_ressource/{id}', [ActualiteController::class, 'index_ressource']);
    Route::apiResource('users', UserResourceController::class);
    Route::apiResource('profils', ProfilResourceController::class);
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
    //Actualites
    Route::get('/actualites', [ActualiteController::class, 'index'])->name('index_actualites');
    Route::get('/actualites/voir/{id}', [ActualiteController::class, 'show'])->name('voir_actualites');
    Route::get('/actualites/create/', [ActualiteController::class, 'create'])->name('create_actualites');
    Route::post('/actualites/create/', [ActualiteController::class, 'store'])->name('store_actualites');
    Route::get('/actualites/edit/{id}', [ActualiteController::class, 'edit'])->name('edit_actualites');
    Route::post('/actualites/update/', [ActualiteController::class, 'update'])->name('update_actualites');
    Route::get('/actualites/delete/{id}', [ActualiteController::class, 'destroy'])->name('destroy_actualites');
    // Ligne Cours
    Route::get('/lignecours/create/{cours_id}', [LigneCoursController::class, 'create'])->name('create_lignecours');
    Route::post('/lignecours/create/', [LigneCoursController::class, 'store'])->name('store_lignecours');
    Route::get('/lignecours/edit/{id}', [LigneCoursController::class, 'edit'])->name('edit_lignecours');
    Route::post('/lignecours/update/', [LigneCoursController::class, 'update'])->name('update_lignecours');
    Route::post('/lignecours/delete/', [CoursController::class, 'destroy'])->name('destroy_cours');
    // Utilisateur
    Route::get('/utilisateur', [UtilisateurController::class, 'index'])->name('index_utilisateur');
    Route::get('/utilisateur/create', [UtilisateurController::class, 'create'])->name('create_utilisateur');
    Route::post('/utilisateur/create', [UtilisateurController::class, 'store'])->name('store_utilisateur');
    Route::get('/utilisateur/edit/{id}', [UtilisateurController::class, 'edit'])->name('edit_utilisateur');
    Route::post('/utilisateur/edit/', [UtilisateurController::class, 'update'])->name('update_utilisateur');
    //Message
    Route::get('message', [IknaMessageController::class, 'show']);
  
    Route::get('chat/{id}', [IknaMessageController::class, 'chat']);
    //Rapport
    Route::get('rapport', [RapportController::class, 'index'])->name('rapport');



    // Groupe 
    Route::get('/groupe', [GroupeController::class, 'index'])->name('index_groupe');
    Route::get('/groupe/voir/{id}', [GroupeController::class, 'show'])->name('voir_groupe');
    Route::get('/groupe/create/', [GroupeController::class, 'create'])->name('create_groupe');
    Route::post('/groupe/create/', [GroupeController::class, 'store'])->name('store_groupe');
    Route::get('/groupe/edit/{id}', [GroupeController::class, 'edit'])->name('edit_groupe');
    Route::post('/groupe/update/', [GroupeController::class, 'update'])->name('update_groupe');
    Route::post('/permission', [GroupeController::class, 'storePermission'])->name('permission');
    Route::get('/gmail', function () {
        return Socialite::driver('google')->redirect();
    });
    Route::get('/callback', function (Request $request) {
        $user = Socialite::driver('google')->user();
    });

    Route::get('conseilspratiques', [ConseilPratiqueController::class, 'index'])->name('conseilspratiques.index');
    Route::get('conseilspratiques/create', [ConseilPratiqueController::class, 'create'])->name('conseilspratiques.create');
    Route::post('conseilspratiques/store', [ConseilPratiqueController::class, 'store'])->name('conseilspratiques.store');
    Route::get('conseilspratiques/{conseilpratique}', [ConseilPratiqueController::class, 'show'])->name('conseilspratiques.show');
    Route::get('conseilspratiques/{conseilpratique}/edit', [ConseilPratiqueController::class, 'edit'])->name('conseilspratiques.edit');
    Route::put('conseilspratiques/', [ConseilPratiqueController::class, 'update'])->name('conseilspratiques.update');
    Route::get('conseilspratiques/delete/{id}', [ConseilPratiqueController::class, 'destroy'])->name('conseilspratiques.destroy');
    Route::get('suggestions', [SuggestionController::class, 'index']);

});

Auth::routes();



