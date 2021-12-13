<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\Transaksi;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransaksiRequest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class TransaksiController extends Controller
{
    public function showTransaction() {
        $data = Transaksi::all();
        return response()->json(['Data' => $data]);
    }

    public function ticketChecking($id) {
        $data = Transaksi::where('id_transaksi', $id)->get();
        return response()->json(['Data' => $data]);
    }

    public function deleteTiket($id) {
        $date = Transaksi::where('id_transaksi', $id)->delete();
        return response()->json(["Data berhasil dihapus"]);
    }

    public function cetakTiket($id){
        $tiket = Transaksi::join('lawyer', 'transaksi.lawyer_id', '=', 'lawyer.id')->where('id_transaksi', $id);
        $pdf = PDF::loadview(compact('tiket'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function updateTicket(TransaksiRequest $trace, $id){
        $tiket = Transaksi::where('id_transaksi', $id)->orderBy('tgl_meet', 'desc')->first();
        $tiket->nama_klien = $trace->nama_klien;
        $tiket->phone = $trace->phone;
        $tiket->tgl_meet = $trace->tgl_meet;
        $tiket->status = $trace->status;
        $tiket->keterangan = $trace->keterangan;
        $tiket->save();
        return response()->json(["Data berhasil diupdate"]);
    }

    public function inputTicket(TransaksiRequest $req) {
        $req->validated();
        $transac = new Transaksi;

        $transac->save();
    }
}
