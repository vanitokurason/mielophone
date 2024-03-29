<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BrodskyListController;
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

Route::get('/', [PageController::class, 'showMainTitle'])->name('mainTitle');

Route::get('/authorization', [PageController::class, 'authorization'])->name('authorization');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/brodsky', [BrodskyListController::class, 'brodskyList']);

Route::get('/brodsky/{id}', [BrodskyListController::class, 'getAnnotation']);

Route::get('/admin/brodsky', [BrodskyListController::class, 'editBrodskyList']);

Route::match(['get', 'post'],'/admin/brodsky/edit/{id}', [BrodskyListController::class, 'editBook']);

Route::match(['get', 'post'], '/admin/brodsky/createBook', [BrodskyListController::class, 'createBook']);

require __DIR__.'/auth.php';
