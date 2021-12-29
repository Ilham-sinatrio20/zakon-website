<?php

namespace App\Http\Controllers;

use App\Models\Suscriber;
use Illuminate\Http\Request;

class SuscriberController extends Controller
{
    //
    public function inputEmail(Request $email) {
        $email ->validated();
        $trace = new Suscriber;
        $trace->email_suscriber = $email -> email_suscriber;

        $trace->save();

        return redirect('index')->with('message', 'Terimakasih sudah suscribe Kami');
        return redirect('index') ;
    }
}
