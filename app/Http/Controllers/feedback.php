<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FormController extends Controller
{
    // Hiển thị form
    public function showForm()
    {
        return view('user');
    }

    public function handleForm(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->message = $request->input('message');
        $feedback->save();

        return view('feedbackOfUser', [
            'name' => $feedback->name,
            'email' => $feedback->email,
            'message' => $feedback->message
        ]);
    }
}
