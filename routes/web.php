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
    Route::get('/novels/create',[NovelController::class, 'create'])->name('createnovels');
    Route::post('/novels/create', [NovelController::class, 'store'])->name('store');
});

Route::get('/contact', [PostController::class, 'contact'])->name('contact');
