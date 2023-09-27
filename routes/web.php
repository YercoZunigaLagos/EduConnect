<?php

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
    return view('/layouts/landing');
})->name('landing');


Route::get('/dashboard', function () {
    return view('dashboard/dash_admin/admin_dashboard');
})->middleware(['auth'])->name('dashboard');


//Route::get('/admin', function () {
//    return view('dashboard/dash_admin/admin_dashboard');
//})->middleware(['auth','role:admin'])->name('admin.index');

//Route::middleware(['auth', 'role:admin'])->group(function () {
//   Route::get('/dashboard', 'AdminController@index')->name('dashboard.admin');
//});

//Route::middleware(['auth', 'role:teacher'])->group(function () {
//    Route::get('/dashboard', 'TeacherController@index')->name('dashboard');
//});
