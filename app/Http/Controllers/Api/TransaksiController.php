<?php

namespace App\Http\Controllers\Api;

use App\Models\Lawyer;
use App\Models\Transaksi;
use App\Http\Controllers\Controller;
use App\Http\Requests\TransaksiRequest;
use Illuminate\Http\Request;

class TransaksiController extends Controller {

    public function showTransaction() {
        $data = Transaksi::with('law')->orderBy('id')->get();
        return response()->json(['Data' => $data]);
    }

    public function ticketChecking($id) {
        $data = Transaksi::with('law')->where('id_transaksi', $id)->orderBy('id')->get();
        return response()->json(['Data' => $data]);
    }

    public function deleteTiket($id) {
        $date = Transaksi::where('id_transaksi', $id)->delete();
        return response()->json(["Data berhasil dihapus"]);
    }

    public function cetakTiket($id){

    }

    public function updateTicket($id){

    }

    public function inputTicket(TransaksiRequest $req) {
        $req->validated();
        $transac = new Transaksi;

        $transac->save();
    }
}
