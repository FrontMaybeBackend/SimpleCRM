<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Users

Route::get('/users',[\App\Http\Controllers\UserController::class,'show'])->name('users')->middleware('auth');
Route::delete('/users/{id}',[\App\Http\Controllers\UserController::class,'destroy'])->name('users/destroy')->middleware('auth');


//Clients

Route::get('/index',[\App\Http\Controllers\ClientController::class,'index'])->name('index')->middleware('auth');
Route::delete('/index/{id}',[\App\Http\Controllers\ClientController::class,'destroy'])->name('index.destroy')->middleware('auth');
Route::get('/clients/edit/{client}',[\App\Http\Controllers\ClientController::class,'edit'])->name('edit')->middleware('auth');
Route::patch('/clients/{client}', [\App\Http\Controllers\ClientController::class,'update'])->name('index.update')->middleware('auth');
Route::get('/index/create',[\App\Http\Controllers\ClientController::class,'create'])->name('index.create')->middleware('auth');
Route::post('/clients',[\App\Http\Controllers\ClientController::class,'store'])->name('index.store')->middleware('auth');
///PROJECT
Route::get('/project',[\App\Http\Controllers\ProjectController::class,'show'])->name('project')->middleware('auth');
Route::get('/project/create',[\App\Http\Controllers\ProjectController::class,'create'])->name('project/create')->middleware('auth');
Route::post('/project',[\App\Http\Controllers\ProjectController::class,'store'])->name('project/')->middleware('auth');

//Dashboard

Route::get('/dashboard/show',[\App\Http\Controllers\DashboardController::class,'show'])->name('show');
