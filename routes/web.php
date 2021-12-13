<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;

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
});

Route::get('/lawyer', function () {
    return view('lawyer');
});

Route::get('lawyer/lawyer1', function () {
    return view('lawyer.lawyer1');
});

Route::get('admin/layout', function(){
    return view('layouts.adminlayout');
});

Route::post('admin/addlawyer', [LawyerController::class, 'addLawyer'])->name('add.lawyer');

Route::get('admin/transaction', function(){
    return view('admin.transaction');
});

Route::get('admin/detail-lawyer', function(){
    return view('admin.detail-lawyer');
});

Route::put('admin/edit-lawyer', function(){
    return view('admin.edit-lawyer');
});

Route::delete('admin/delete-lawyer', function(){
    return view('admin.delete-lawyer');
});

Route::get('admin/list-lawyer', [LawyerController::class, 'index']);

Route::get('admin/add-lawyer', function(){
    return view('admin.addlawyer');
});


Route::get('/lawyer@ekonomi',[LawyerController::class, 'showLayer']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

