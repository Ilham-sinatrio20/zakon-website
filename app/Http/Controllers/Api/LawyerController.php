<?php

namespace App\Http\Controllers\Api;

use App\Models\Lawyer;
use App\Http\Controllers\Controller;
use App\Http\Requests\LawyerRequest;
use Illuminate\Http\Request;

class LawyerController extends Controller {
    public function addLawyer(LawyerRequest $law){
        $law->validated();
        $input = new Lawyer;
        $input->nama_lawyer = $law->nama_lawyer;
        $input->phone = $law->phone;
        $input->place_birth = $law->place_birth;
        $input->date_birth = $law->date_birth;
        $input->address = $law->address;
        $input->picture = $law->picture;
        $input->email = $law->email;
        $input->jenis_hukum = $law->jenis_hukum;
        $input->deskripsi = $law->deskripsi;
        $input->save();
        return response()->json(['Data berhasil ditambah']);
    }

    public function index(){
        $lawyer = Lawyer::all();
        return response()->json(['lawyer' => $lawyer]);
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
        $update = Lawyer::where('id',$id)->update([
            'nama_lawyer' => $law->nama_lawyer,
            'phone' => $law->phone,
            'place_birth' => $law->place_birth,
            'date_birth' => $law->date_birth,
            'address' => $law->address,
            'picture' => $law->picture,
            'email' => $law->email,
            'jenis_hukum' => $law->jenis_hukum,
            'deskripsi' => $law->deskripsi
        ]);
        return response()->json(["Data berhasil diupdate"]);
    }
}

/*
    // $update->nama_lawyer = $law->nama_lawyer;
        // $update->phone = $law->phone;
        // $update->place_birth = $law->place_birth;
        // $update->date_birth = $law->date_birth;
        // $update->address = $law->address;
        // $update->picture = $law->picture;
        // $update->email = $law->email;
        // $update->jenis_hukum = $law->jenis_hukum;
        // $update->deskripsi = $law->deskripsi;
        // $result = $update->save();

*/
