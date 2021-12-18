<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\Transaksi;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransaksiRequest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class TransaksiController extends Controller {
    public function showTransaction() {
        $data = Transaksi::join('lawyer', 'transaksi.lawyer_id', '=', 'lawyer.id')->orderBy('id_transaksi', 'ASC')->get();
        return view('admin.transaksi.transaction', ['transaksi' => $data]);
    }

    public function ticketChecking($id) {
        $trans = Transaksi::join('lawyer', 'transaksi.lawyer_id', '=', 'lawyer.id')->where('id_transaksi', $id)->first();
        return view('admin.transaksi.detail-transaksi', ['trans' => $trans]);
    }

    public function deleteTiket($id) {
        $date = Transaksi::where('id_transaksi', $id)->delete();
        return redirect()->route('admin.transaction-all')->with('success', 'Data successfully to delete');
    }

    public function cetakTiket($id){
        $tiket = Transaksi::join('lawyer', 'transaksi.lawyer_id', '=', 'lawyer.id')->where('id_transaksi', $id);
        $pdf = PDF::loadview(compact('tiket'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function updateTicket(TransaksiRequest $trace, $id){
        $trace->validated();
        $tiket = Transaksi::join('lawyer', 'transaksi.lawyer_id', '=', 'lawyer.id')->where('id_transaksi', $id)->orderBy('tgl_meet', 'desc')->first();
        // $id_lawyer = $tiket->lawyer->id;
        $tiket->nama_klien = $trace->nama_klien;
        $tiket->email_klien = $trace->email_klien;
        $tiket->phone = $trace->phone;
        // $tiket->lawyer_id = $id_lawyer;
        $tiket->tgl_meet = $trace->tgl_meet;
        $tiket->status = $trace->status;
        $tiket->keterangan = $trace->keterangan;
        $tiket->save();

        return redirect()->route('admin.transaction-all')->with('success', 'Data successfully update');
    }

    public function inputTicket(TransaksiRequest $tiket) {
        $tiket->validated();
        $trace = new Transaksi;
        $tiket->nama_klien = $trace->nama_klien;
        $tiket->phone = $trace->phone;
        $tiket->tgl_meet = $trace->tgl_meet;
        $tiket->status = $trace->status;
        $tiket->keterangan = $trace->keterangan;
        $tiket->save();
    }
}
