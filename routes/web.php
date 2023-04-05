<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//admin routes
Route::get('/admin/projects/create',[App\Http\Controllers\AdminProjectsController::class, 'create']
)->name('admin.projects.create');
Route::get('/admin/projects/index',[App\Http\Controllers\AdminProjectsController::class, 'index']
)->name('admin.projects.index');
Route::get('/admin/projects/edit/{id}',[App\Http\Controllers\AdminProjectsController::class, 'edit']
)->name('admin.projects.edit');
Route::post('/admin/projects/store',[App\Http\Controllers\AdminProjectsController::class, 'store']
)->name('admin.projects.store');
Route::post('/admin/projects/update/{id}',[App\Http\Controllers\AdminProjectsController::class, 'update']
)->name('admin.projects.update');
Route::delete('/admin/projects/delete/{id}',[App\Http\Controllers\AdminProjectsController::class, 'destroy']
)->name('admin.projects.delete');

//user routes
Route::get('/projects/index',[App\Http\Controllers\HomePageController::class, 'index']
)->name('projects.index');
Route::get('/projects/index/{id}',[App\Http\Controllers\HomePageController::class, 'show']
)->name('projects.index.detail');

//adding Search Functionality 
Route::get('/search',[App\Http\Controllers\HomePageController::class, 'search']
)->name('projects.search');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
