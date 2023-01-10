<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProduitResource;
use App\Models\Produit;
use  App\Http\Controllers\ProduitController;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\CoursController;
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


Route::get('/chat', function () {
    return view('chat');
});

Route::middleware(['auth'])->group(function () {
   // Route::get('/', [AdminController::class, 'indexMessage']);
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/:id', [AdminController::class, 'indexMessage']);
    Route::get('/cours', [CoursController::class, 'index']);
    Route::get('cours/:id', [CoursController::class, 'show']);
    Route::get('/cours/create', [CoursController::class, 'create']);
    Route::post('/cours/create', [CoursController::class, 'store']);

});

Auth::routes();



