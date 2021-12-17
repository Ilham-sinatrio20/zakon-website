<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Lawyer;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function dashboard(){
        $countAdmin = User::count();
        $countLawyer = Lawyer::count();
        $countTransaction = Transaksi::count();
        $countFeedback = Feedback::count();
        return view('admin.dashboard', [
            'countAdmin' => $countAdmin,
            'countLawyer' => $countLawyer,
            'countTransaction' => $countTransaction,
            'countFeedback' => $countFeedback
        ]);
    }
}
