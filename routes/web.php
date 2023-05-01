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

Route::controller(UserController::class)->group(function () {
    Route::get('/users','index')->name('user.users')->middleware('auth');
    Route::delete('/users/{user}','destroy')->name('users.destroy')->middleware('auth');
});

//Clients

Route::controller(ClientController::class)->group(function () {
    Route::get('/index','index')->name('index')->middleware('auth');
    Route::delete('/index/{client}','destroy')->name('index.destroy')->middleware('auth');
    Route::get('/clients/edit/{client:company}','edit')->name('edit')->middleware('auth');
    Route::patch('/clients/{client}', 'update')->name('index.update')->middleware('auth');
    Route::get('/index/create','create')->name('index.create')->middleware('auth');
    Route::post('/clients','store')->name('index.store')->middleware('auth');

});



///PROJECT

Route::controller(ProjectController::class)->group(function () {
    Route::get('/project/index', 'index')->name('project.index')->middleware('auth');
    Route::get('/project/create', 'create')->name('project.create')->middleware('auth');
    Route::post('/project','store')->name('project.store')->middleware('auth');
});

//Dashboard



Route::get('/dashboard/index',[DashboardController::class,'index'])->name('dashboard.index')->middleware('auth');
