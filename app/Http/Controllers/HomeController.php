<?php

namespace App\Http\Controllers;
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
}
