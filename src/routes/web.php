<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::patch('/contacts',[ContactController::class, 'update']);
// Route::delete('/todos/delete',[TodoController::class, 'destroy']);
// Route::get('/todos/search',[TodoController::class, 'search']);
// Route::get('/categories',[CategoryController::class, 'index']);

Route::post('/register',[UserController::class, 'store']);
Route::post('/register/login',[UserController::class, 'login']);
Route::post('/login/admin',[UserController::class, 'admin']);
