<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\BooksController;

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

Route::get('/', function () {
    return view('index');
})->name('index');
// Route::middleware(['admin'])->prefix('/admin')->group(function ()
Route::middleware(['admin'])->group(function ()
{
// admin
Route::get('/admin/admin',[AdminController::class,'admin'])->name('admin');
Route::post('/admin/add_admin',[AdminController::class,'add_admin'])->name('add_admin');
Route::get('/admin/edit_admin/{id}',[AdminController::class,'edit_admin'])->name('edit_admin');
Route::post('/admin/update_admin/{id}',[AdminController::class,'update_admin'])->name('update_admin');
Route::get('/admin/delet_admin/{id}',[AdminController::class,'delet_admin'])->name('delet_admin');


//user
Route::get('/admin/user',[UserController::class,'user'])->name('user');
Route::post('/admin/add_user',[UserController::class,'add_user'])->name('add_user');
Route::get('/admin/edit_user/{id}',[UserController::class,'edit_user'])->name('edit_user');
Route::post('/admin/update_user/{id}',[UserController::class,'update_user'])->name('update_user');
Route::get('/admin/delet_user/{id}',[UserController::class,'delet_user'])->name('delet_user');

//doctor
Route::get('/admin/doctor',[DoctorController::class,'doctor'])->name('doctor');
Route::post('/admin/add_doctor',[DoctorController::class,'add_doctor'])->name('add_doctor');
Route::get('/admin/edit_doctor/{id}',[DoctorController::class,'edit_doctor'])->name('edit_doctor');
Route::post('/admin/update_doctor/{id}',[DoctorController::class,'update_doctor'])->name('update_doctor');
Route::get('/admin/delet_doctor/{id}',[DoctorController::class,'delet_doctor'])->name('delet_doctor');

// //books
// Route::get('/admin/books/{id}',[BooksController::class,'books'])->name('books');
// Route::post('/admin/add_book',[BooksController::class,'add_book'])->name('add_book');
// Route::get('/admin/edit_book/{id}/{depart}',[BooksController::class,'edit_book'])->name('edit_book');
// Route::post('/admin/update_book/{id}/{depart}',[BooksController::class,'update_book'])->name('update_book');
// Route::get('/admin/delet_book/{id}',[BooksController::class,'delet_book'])->name('delet_book');

});
Route::middleware(['auth'])->group(function (){

    Route::get('/admin/books/{id}',[BooksController::class,'books'])->name('books');
    Route::post('/admin/add_book',[BooksController::class,'add_book'])->name('add_book');
    Route::get('/admin/edit_book/{id}/{depart}',[BooksController::class,'edit_book'])->name('edit_book');
    Route::post('/admin/update_book/{id}/{depart}',[BooksController::class,'update_book'])->name('update_book');
    Route::get('/admin/delet_book/{id}',[BooksController::class,'delet_book'])->name('delet_book');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
