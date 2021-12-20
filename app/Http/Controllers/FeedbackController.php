<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Mail\FeedbackEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class FeedbackController extends Controller {

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function showFeedback(){
        // $feedback = Feedback::select('SELECT nama_sender, email_sender, phone_sender, pesan, DATE(created_at);')->get();
        $feedback = Feedback::all();
        return view('admin.feedback.feedback-home', ['feedback' => $feedback]);
    }

    public function showById($id){
        $feedback = Feedback::where('id', $id)->first();
        return view('admin.feedback.feedback-detail', ['fb' => $feedback]);
    }

    public function sendFeedback(FeedbackRequest $request){
        $validated = $request->validated();
        return response()->json(['feedback' => $validated]);
    }

    public function sendEmail($id){
        $user = Feedback::select('nama_sender')->where('id', $id)->first();
        $email = 'sinatrio20@gmail.com';

        $mail = [
            'title' => 'Thanks for your feedback',
            'url' => 'https://zakon.com'
        ];

        Mail::to($email)->send(new FeedbackEmail($mail), $user->toArray());

        return redirect()->route('home.feed')->with('success', 'Email succesfully to send');

    }
}
