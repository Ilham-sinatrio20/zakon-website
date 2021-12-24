<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use App\Models\Feedback;
use App\Models\Lawyer;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $userList = User::all();
        $countAdmin = User::count();
        $countLawyer = Lawyer::count();
        $countTransaction = Transaksi::count();
        $countFeedback = Feedback::count();
        return view('admin.dashboard', [
            'countAdmin' => $countAdmin,
            'countLawyer' => $countLawyer,
            'countTransaction' => $countTransaction,
            'countFeedback' => $countFeedback,
            'userList' => $userList
        ]);
    }

    public function showDetail($id){
        $detail = User::where('id', $id)->get();
        return view('admin.user-edit');
    }

    public function updateProfile(HomeRequest $hr, $id){
        $hr->validated();
        $detail = User::where('id', $id)->first();
        $detail->name = $hr->name;
        $detail->email = $hr->email;
        $detail->save();
        return redirect()->route('home')->with('success', 'Successfull to update Data');
    }
}
