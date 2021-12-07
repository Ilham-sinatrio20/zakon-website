<?php

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


Route::get('/lawyer@ekonomi',[LawyerController::class, 'showLayer']);

