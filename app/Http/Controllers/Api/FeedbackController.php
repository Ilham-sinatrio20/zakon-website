<?php

namespace App\Http\Controllers\Api;

use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function showFeedback(){
        $feedback = Feedback::all();
        return response()->json(['feedback' => $feedback]);
    }

    public function showById($id){
        $feedback = Feedback::where('id', $id)->get();
        return response()->json(['feedback' => $feedback]);
    }

    public function sendFeedback(FeedbackRequest $request){
        $validated = $request->validated();
        return response()->json(['feedback' => $validated]);
    }
}
