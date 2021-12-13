<?php

use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\LawyerController;
use App\Http\Controllers\Api\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Lawyer Route
Route::get('/lawyer', [LawyerController::class, 'index']);
Route::get('/lawyer/{law}/jenisHukum', [LawyerController::class, 'showLaw']);
Route::get('/lawyer/{id}/showID', [LawyerController::class, 'showByID']);
Route::delete('/lawyer/{id}/delete', [LawyerController::class, 'delete']);
Route::post('/lawyer/add', [LawyerController::class, 'addLawyer']);
Route::put('/lawyer/{id}/update', [LawyerController::class, 'updateLawyer']);

// Feedback Route
Route::get('/feedback', [FeedbackController::class, 'showFeedback']);
Route::get('/feedback/{id}/show', [FeedbackController::class, 'showById']);
Route::post('/feedback/post', [FeedbackController::class, 'sendFeedback']);

// Transaction Route
Route::get('/transaksi', [TransaksiController::class, 'showTransaction']);
Route::get('tiket/{id}/cari', [TransaksiController::class, 'ticketChecking']);
Route::delete('/tiket/{id}/delete', [TransaksiController::class, 'deleteTiket']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
