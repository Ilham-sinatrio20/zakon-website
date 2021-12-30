<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\Transaksi;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransaksiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\PDF;
use App\Mail\WelcomeMail;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller {
    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function showTransaction() {
        $data = Transaksi::join('lawyer', 'transaksi.lawyer_id', '=', 'lawyer.id')->orderBy('id_transaksi', 'ASC')->get();
        return view('admin.transaksi.transaction', ['transaksi' => $data]);
    }

    public function userTicketCheck($id) {
        $trans = Transaksi::join('lawyer', 'transaksi.lawyer_id', '=', 'lawyer.id')->where('id_transaksi', $id)->first();
        return view('admin.transaksi.detail-transaksi', ['trans' => $trans]);
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

        $email = [
            'nama_klien' => $tiket->nama_klien,
            'tgl_meet' => $tiket->tgl_meet
        ];

        Mail::to($tiket->email)->queue(new WelcomeMail($email));
        return back();
    }

    public function inputsTicket(Request $tiket) {
        // $tiket->validated();
        $trace = new Transaksi;
        $trace->lawyer_id = Lawyer::where('nama_lawyer', $tiket->pengacara)->value('id');
        // $trace->lawyer_id = $tiket->lawyer_id;
        $trace->nama_klien = $tiket->nama_klien;
        $trace->email_klien = $tiket->email_klien;
        $trace->phone = $tiket->phone;
        $trace->jenis_hukum = $tiket->jenis_hukum;
        $trace->tgl_meet = $tiket->tgl_meet;
        $trace->waktu_meet = $tiket->waktu_meet;
        $trace->jenis_meet = $tiket->jenis_meet;
        $trace->deskripsi = $tiket->deskripsi;
        $trace->status = "Proses";
        $trace->save();

        $transaksi = Transaksi::join('lawyer', 'transaksi.lawyer_id', '=', 'lawyer.id')->where('transaksi.id_transaksi', $trace->id_transaksi)->first();
        $email = [
            'nama_klien' => $transaksi->nama_klien,
            'tgl_meet' => $transaksi->tgl_meet,
            'waktu_meet' => $transaksi->waktu_meet,
            'jenis_meet' => $transaksi->jenis_meet,
            'nama_lawyer' => $transaksi->nama_lawyer,
            'keterangan' => $transaksi->keterangan
        ];
        Alert::success('Transaksi Berhasil', 'Silahkan Cetak Tiket');
        Mail::to($transaksi->email_klien)->queue(new WelcomeMail($email));

        return $this->cari($trace->id_transaksi);
    }

    public function cari($id){
        $transaksi = Transaksi::join('lawyer', 'transaksi.lawyer_id', '=', 'lawyer.id')->where('transaksi.id_transaksi', $id)->first();
        return view('hasilCari', ['transaksi' => $transaksi]);
    }

}
