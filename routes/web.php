<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::redirect('/', '/home');

route::get('/home', [HomeController::class, 'home']);

route::get('/blog/add', [HomeController::class, 'blogAdd']);

route::get('/blog-list', [HomeController::class, 'blogList'])->name('blog-list');

route::get('/blog/{blog}', [HomeController::class, 'blogEdit']);

route::post('/blog-update', [HomeController::class, 'blogUpdate']);

route::post('/blog-append', [HomeController::class, 'blogAppend']);

route::get('/blog/{blog}/delete', [HomeController::class, 'blogDelete']);