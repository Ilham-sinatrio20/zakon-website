<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LawyerFEController;
use App\Http\Controllers\SuscriberController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [LawyerFEController::class, 'indeks'])->name('index');

Route::get('/index', [LawyerFEController::class, 'indeks'])->name('index');

Route::post('add.feedback', [FeedbackController::class, 'inputFeedback']);

Route::post('add.transaksi', [TransaksiController::class, 'inputsTicket'])->name('add-transaksi');

Route::post('add.email', [SuscriberController::class, 'inputEmail']);

Route::get('/{id}/hasilCari', [TransaksiController::class, 'cari'])->name('hasilCari');

Route::get('/lawyer', [LawyerFEController::class, 'lawyer'])->name('lawyer');

Route::get('/{id}/detailLawyer', [LawyerFEController::class, 'detail'])->name('detailLawyer');

Route::get('admin/layout', function(){
    return view('layouts.adminlayout');
});

Auth::routes();

Route::prefix('/')->middleware('auth')->group(function(){

    // Admin Lawyer
    Route::get('admin/add-lawyer', function(){
        return view('admin.addlawyer');
    });

    Route::get('admin/list-lawyer', [LawyerController::class, 'index'])->name('admin.list-lawyer');
    Route::post('admin/addlawyer', [LawyerController::class, 'addLawyer'])->name('add.lawyer');
    Route::get('admin/{id}/edit', [LawyerController::class, 'showByID'])->name('admin.edit');
    Route::put('admin/{id}/update', [LawyerController::class, 'updateLawyer'])->name('admin.update');
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
    Route::get('/admin/feedback/{id}/response', [FeedbackController::class, 'sendEmail'])->name('send.feedback');

    // Edit Profile
    Route::get('admin/{id}/detail-profile', [HomeController::class, 'showDetail'])->name('detail.profile');
    Route::put('admin/{id}/edit-profile', [HomeController::class, 'updateProfile'])->name('edit.profile');
});

Route::get('/lawyer@ekonomi',[LawyerController::class, 'showLayer']);

Route::post('/', [TransaksiController::class, 'inputTicket'])->name('jadwalkan');
Route::get('/cari', [TransaksiController::class, 'userTicketCheck'])->name('cari.tiket');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
