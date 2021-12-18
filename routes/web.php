<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;
use Illuminate\Support\Facades\Auth;

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

Route::get('admin/transaksi/transaction', [TransaksiController::class, 'showTransaction'])->name('admin.transaction-all');

Route::get('admin/{id}/edit', [LawyerController::class, 'showByID'])->name('admin.edit');

Route::get('admin/{id}/detail-lawyer', [LawyerController::class, 'detail'])->name('admin.detail');

Route::put('admin/{id}/edit-lawyer', [LawyerController::class, 'updateLawyer'])->name('admin.update');

Route::delete('admin/{id}/delete-lawyer', [LawyerController::class, 'delete'])->name('admin.delete');

Route::get('admin/list-lawyer', [LawyerController::class, 'index'])->name('admin.list-lawyer');

Route::get('admin/add-lawyer', function(){
    return view('admin.addlawyer');
});

Route::delete('admin/transaksi/{id}/delete', [TransaksiController::class, 'deleteTiket'])->name('delete.transaksi');

Route::get('admin/transaksi/{id}/detail', [TransaksiController::class, 'ticketChecking'])->name('detail.transaksi');

Route::put('admin/transaksi/{id}/update', [TransaksiController::class, 'updateTicket'])->name('update.transaksi');

Route::get('/admin/feedback/{id}/detail', [FeedbackController::class, 'showById'])->name('detail.feed');

Route::get('/admin/feedback/', [FeedbackController::class, 'showFeedback'])->name('home.feed');

Route::get('/lawyer@ekonomi',[LawyerController::class, 'showLayer']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>