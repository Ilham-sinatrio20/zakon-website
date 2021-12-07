<?php

use App\Http\Controllers\Api\LawyerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Lawyer Route
Route::get('/lawyer', [LawyerController::class, 'index']);
Route::get('/lawyer/{law}/jenisHukum', [LawyerController::class, 'showLaw']);
Route::get('/lawyer/{id}/showID', [LawyerController::class, 'showByID']);
Route::delete('/lawyer/{id}/delete', [LawyerController::class, 'delete']);
Route::post('/lawyer/add', [LawyerController::class, 'addLawyer']);
Route::put('/lawyer/{id}/update', [LawyerController::class, 'updateLawyer']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
