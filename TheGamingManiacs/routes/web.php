<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminGameController;




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

Route::get('/', [PostController::class , 'show']);
Route::get('/post/{slug}', [PostController::class, 'show_single']);

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/admin/posts', [AdminPostController::class, 'show']);
Route::delete('/admin/post/delete/{id}', [AdminPostController::class, 'delete']);

Route::get('/admin/games', [AdminGameController::class, 'show']);
Route::get('/admin/add-game', [AdminGameController::class, 'add']);
Route::post('/admin/store-game', [AdminGameController::class, 'store']);

Route::get('/admin/add-post', [PostController::class, 'add']);
Route::post('/admin/store-post', [PostController::class, 'store']);


