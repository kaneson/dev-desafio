<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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


Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/detail/{id}', [SiteController::class, 'detail'])->name('detail');
Route::post('/comment', [SiteController::class, 'comment'])->name('comment');
Route::get('/view_comment/{id}', [SiteController::class, 'view_comment'])->name('view_comment');
Route::post('/comment_update', [SiteController::class, 'comment_update'])->name('comment_update');
