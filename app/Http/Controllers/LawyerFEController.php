<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\Feedback;
use App\Models\Transaksi;
use App\Http\Controllers\Controller;
use App\Http\Requests\LawyerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LawyerFEController extends Controller {
     public function addLawyer(LawyerRequest $law){
        $law->validated();

        $input = new Lawyer;
        if($law->hasFile('picture')){
            $file = $law->file('picture');
            $ext = $file->getClientOriginalExtension();
            $image_name = time().'.'.$ext;
            $file->move('images/lawyer', $image_name);
            $input->picture = $image_name;
        }

        $input->nama_lawyer = $law->nama_lawyer;
        $input->phone = $law->phone;
        $input->place_birth = $law->place_birth;
        $input->date_birth = $law->date_birth;
        $input->address = $law->address;
        $input->email = $law->email;
        $input->jenis_hukum = $law->jenis_hukum;
        $input->deskripsi = $law->deskripsi;
        $input->save();
        return back();
    }

    public function indeks(){
        $count = Lawyer::count();
        $lawyer = Lawyer::all();
        $transaksi = Transaksi::all();
        $feedback = Feedback::all();
        $tampilEkonomi = Lawyer::where('jenis_hukum', 'Ekonomi')->get();
        $tampilKeluarga = Lawyer::where('jenis_hukum', 'Keluarga')->get();
        $tampilPidana = Lawyer::where('jenis_hukum', 'Pidana')->get();
        $tampilNegara = Lawyer::where('jenis_hukum', 'Negara')->get();
        return view('index', ['lawyer' => $lawyer, 'transaksi' => $transaksi, 
        'feedback' => $feedback, 'count' => $count, 'tampilEkonomi' => $tampilEkonomi,
        'tampilKeluarga' => $tampilKeluarga, 'tampilPidana' => $tampilPidana, 
        'tampilNegara' => $tampilNegara]);
    }

    public function lawyer(){
        $count = Lawyer::count();
        $lawyer = Lawyer::all();
        return view('lawyer', ['lawyer' => $lawyer, 'count' => $count]);
    }

    public function showByID($id){
        $lawyer = Lawyer::where('id', $id)->get();
        return response()->json(['lawyer' => $lawyer]);
    }

    public function showLaw($jenis_hukum){
        $lawyer = Lawyer::where('jenis_hukum', $jenis_hukum)->get();
        return response()->json(['lawyer' => $lawyer]);
    }

    public function delete($id){
        Lawyer::find($id)->delete();
        return response()->json(["Data berhasil dihapus"]);
    }

    public function updateLawyer(LawyerRequest $law, $id){
        $law->validated();
        $lawyer = Lawyer::where('id', $id)->first();
        if($law->hasFile('images')){
            $path = 'images/lawyer'.$lawyer->picture;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $law->file('images');
            $ext = $file->getClientOriginalExtension();
            $image_name = time().'.'.$ext;
            $file->move('images/lawyer', $image_name);
            $lawyer->picture = $image_name;
        }
        $lawyer->nama_lawyer = $law->nama_lawyer;
        $lawyer->phone = $law->phone;
        $lawyer->place_birth = $law->place_birth;
        $lawyer->date_birth = $law->date_birth;
        $lawyer->address = $law->address;
        $lawyer->email = $law->email;
        $lawyer->jenis_hukum = $law->jenis_hukum;
        $lawyer->deskripsi = $law->deskripsi;
        $lawyer->save();
        return response()->json(["Data berhasil diupdate"]);
    }

    public function detail($id){
        $lawyer = Lawyer::where('id', $id)->first();
        return view('detailLawyer', ['lawyer' => $lawyer]);
    }
}
