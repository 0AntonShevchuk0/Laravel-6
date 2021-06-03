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

use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AddController;

Route::get('/', [CatalogueController::class, 'getGames'])->name('catalogue');

Route::get('/info/{id}/{id_game}', [CatalogueController::class, 'goToInfo'])->name('info');

Route::get('/key/{id}', [InfoController::class, 'getKey'])->name('key');

Route::get('/add', [AddController::class, 'start'])->name('add');
Route::post('/add', [AddController::class, 'submit'])->name('add-submit');





