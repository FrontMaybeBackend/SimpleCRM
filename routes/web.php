<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/users',[UserController::class,'show'])->name('users')->middleware('auth');
Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users/destroy')->middleware('auth');


//Clients



Route::get('/index',[ClientController::class,'index'])->name('index')->middleware('auth');
Route::delete('/index/{id}',[ClientController::class,'destroy'])->name('index.destroy')->middleware('auth');
Route::get('/clients/edit/{client}',[ClientController::class,'edit'])->name('edit')->middleware('auth');
Route::patch('/clients/{client}', [ClientController::class,'update'])->name('index.update')->middleware('auth');
Route::get('/index/create',[ClientController::class,'create'])->name('index.create')->middleware('auth');
Route::post('/clients',[ClientController::class,'store'])->name('index.store')->middleware('auth');
///PROJECT
Route::get('/project',[ProjectController::class,'show'])->name('project')->middleware('auth');
Route::get('/project/create',[ProjectController::class,'create'])->name('project/create')->middleware('auth');
Route::post('/project',[ProjectController::class,'store'])->name('project/')->middleware('auth');

//Dashboard



Route::get('/dashboard/index',[DashboardController::class,'index'])->name('dashboard.index');
