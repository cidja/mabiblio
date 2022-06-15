<?php

use App\Http\Controllers\NovelController;
use App\Http\Controllers\PostController;
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
Route::get('/', [NovelController::class, 'index'])->name('welcome');
Route::name('novels.')->group(function(){
    Route::get('/novels/create',[NovelController::class, 'create'])->name('createnovels'); // route qui affiche form createnovels
    Route::post('/novels/create', [NovelController::class, 'store'])->name('store'); // route qui permet de store les infos rentrées dans createnovels
    Route::get('/novels/{id}', [NovelController::class, 'show'])->whereNumber('id')->name('show'); //route pour afficher 1 titre en particulier en cliquant dessus sur livres.blade
    Route::get('/novels/update/{id}', [NovelController::class, 'update'])->whereNumber('id')->name('update');
    Route::post('/novels/update/{id}', [NovelController::class, 'saveupdate'])->whereNumber('id')->name('saveupdate');
});

Route::get('/contact', [PostController::class, 'contact'])->name('contact');
