<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Http\Controllers\Controller;
use App\Http\Requests\LawyerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class LawyerController extends Controller {

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
        $input->negara = $law->negara;
        $input->last_edu = $law->last_edu;
        $input->website = $law->website;
        $input->email = $law->email;
        $input->jenis_hukum = $law->jenis_hukum;
        $input->pengalaman = $law->pengalaman;
        $input->save();
        Alert::success('Insert Data Success', 'Success Added Data');
        return redirect()->route('admin.list-lawyer')->with('success', 'Successfull to add Lawyer');
    }

    public function index(){
        $count = Lawyer::count();
        $eko_count = Lawyer::where('jenis_hukum', '=', 'Ekonomi')->count();
        $tn_count = Lawyer::where('jenis_hukum', '=', 'Tata Negara')->count();
        $pidana_count = Lawyer::where('jenis_hukum', '=', 'Pidana')->count();
        $fam_count = Lawyer::where('jenis_hukum', '=', 'Keluarga')->count();
        $lawyer = Lawyer::all();
        $ekonomi = Lawyer::where('jenis_hukum', '=', 'Ekonomi')->get();
        $tatanegara = Lawyer::where('jenis_hukum', '=', 'Tata Negara')->get();
        $crimes = Lawyer::where('jenis_hukum', '=', 'Pidana')->get();
        $keluarga = Lawyer::where('jenis_hukum', '=', 'Keluarga')->get();
        return view('admin.listlawyer', [
            'lawyer' => $lawyer,
            'count' => $count,
            'eko' => $eko_count,
            'tn' => $tn_count,
            'pidana' => $pidana_count,
            'fam' => $fam_count,
            'ekonomi' => $ekonomi,
            'tatanegara' => $tatanegara,
            'crimes' => $crimes,
            'keluarga' => $keluarga
        ]);
    }

    public function detail($id){
        $lawyer = Lawyer::where('id', $id)->first();
        return view('admin.detail-lawyer', [
            'lawyer' => $lawyer,
        ]);
    }

    public function showByID($id){
        $lawyer = Lawyer::where('id', $id)->first();
        return view('admin.edit-lawyer', ['lawyer' => $lawyer]);
    }

    public function showLaw($jenis_hukum){
        $lawyer = Lawyer::where('jenis_hukum', $jenis_hukum)->get();
        return response()->json(['lawyer' => $lawyer]);
    }

    public function delete($id){
        Lawyer::find($id)->delete();
        Alert::success('Delete Success', 'Success Delete Data');
        return redirect()->route('admin.list-lawyer');
    }

    public function updateLawyer(LawyerRequest $law, $id){
        $law->validated();
        $lawyer = Lawyer::where('id', $id)->first();
        if($law->hasFile('picture')){
            $path = 'images/lawyer/'.$lawyer->picture;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $law->file('picture');
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
        $lawyer->negara = $law->negara;
        $lawyer->last_edu = $law->last_edu;
        $lawyer->website = $law->website;
        $lawyer->email = $law->email;
        $lawyer->jenis_hukum = $law->jenis_hukum;
        $lawyer->pengalaman = $law->pengalaman;
        $lawyer->save();
        Alert::success('Update Success', 'Success Update Data');
        return redirect()->route('admin.list-lawyer')->with('success', 'Data successfully to update');
    }
}
