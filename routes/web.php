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

Route::get('/users',[\App\Http\Controllers\UserController::class,'show'])->name('users');
Route::delete('/users/{id}',[\App\Http\Controllers\UserController::class,'destroy'])->name('users/destroy');


//Clients

Route::get('/index',[\App\Http\Controllers\ClientController::class,'index'])->name('index');
//PROJECT
Route::get('/project',[\App\Http\Controllers\ProjectController::class,'show'])->name('project');
Route::get('/project/create',[\App\Http\Controllers\ProjectController::class,'create'])->name('project/create');
Route::post('/project',[\App\Http\Controllers\ProjectController::class,'store'])->name('project/');
//Dashboard

Route::get('/dashboard/show',[\App\Http\Controllers\DashboardController::class,'show'])->name('show');
