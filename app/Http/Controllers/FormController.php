<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FormController extends Controller
{
    // Hiển thị form
    public function showForm(): View
    {
        return view('user');
    }

    public function handleForm(Request $request): View
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        return view('feedbackOfUser', [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
    }
}
