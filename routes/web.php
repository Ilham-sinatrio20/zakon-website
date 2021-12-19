<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::prefix('/')->middleware('auth')->group(function(){

    // Admin Lawyer
    Route::get('admin/list-lawyer', [LawyerController::class, 'index'])->name('admin.list-lawyer');
    Route::post('admin/addlawyer', [LawyerController::class, 'addLawyer'])->name('add.lawyer');
    Route::get('admin/{id}/edit', [LawyerController::class, 'showByID'])->name('admin.edit');
    Route::get('admin/{id}/detail-lawyer', [LawyerController::class, 'detail'])->name('admin.detail');
    Route::delete('admin/{id}/delete-lawyer', [LawyerController::class, 'delete'])->name('admin.delete');

    // Admin Transaksi
    Route::get('admin/transaksi/transaction', [TransaksiController::class, 'showTransaction'])->name('admin.transaction-all');
    Route::get('admin/transaksi/{id}/detail', [TransaksiController::class, 'ticketChecking'])->name('detail.transaksi');
    Route::put('admin/transaksi/{id}/update', [TransaksiController::class, 'updateTicket'])->name('update.transaksi');
    Route::delete('admin/transaksi/{id}/delete', [TransaksiController::class, 'deleteTiket'])->name('delete.transaksi');

    // Admin Feedback
    Route::get('/admin/feedback/', [FeedbackController::class, 'showFeedback'])->name('home.feed');
    Route::get('/admin/feedback/{id}/detail', [FeedbackController::class, 'showById'])->name('detail.feed');
});

// Route::post('admin/addlawyer', [LawyerController::class, 'addLawyer'])->name('add.lawyer')->middleware('guest');

// Route::get('admin/transaksi/transaction', [TransaksiController::class, 'showTransaction'])->name('admin.transaction-all')->middleware('guest');

// Route::get('admin/{id}/edit', [LawyerController::class, 'showByID'])->name('admin.edit')->middleware('guest');

// Route::get('admin/{id}/detail-lawyer', [LawyerController::class, 'detail'])->name('admin.detail')->middleware('guest');

// Route::put('admin/{id}/edit-lawyer', [LawyerController::class, 'updateLawyer'])->name('admin.update')->middleware('guest');

// Route::delete('admin/{id}/delete-lawyer', [LawyerController::class, 'delete'])->name('admin.delete')->middleware('guest');

// Route::get('admin/list-lawyer', [LawyerController::class, 'index'])->name('admin.list-lawyer')->middleware('guest');

// Route::get('admin/add-lawyer', function(){
//     return view('admin.addlawyer');
// });

// Route::delete('admin/transaksi/{id}/delete', [TransaksiController::class, 'deleteTiket'])->name('delete.transaksi')->middleware('guest');

// Route::get('admin/transaksi/{id}/detail', [TransaksiController::class, 'ticketChecking'])->name('detail.transaksi')->middleware('guest');

// Route::put('admin/transaksi/{id}/update', [TransaksiController::class, 'updateTicket'])->name('update.transaksi')->middleware('guest');

// Route::get('/admin/feedback/{id}/detail', [FeedbackController::class, 'showById'])->name('detail.feed')->middleware('guest');

// Route::get('/admin/feedback/', [FeedbackController::class, 'showFeedback'])->name('home.feed')->middleware('guest');

Route::get('/lawyer@ekonomi',[LawyerController::class, 'showLayer']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
