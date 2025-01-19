<?php

namespace App\Http\Controllers;

class FeedbackController extends Controller
{
    public function showFeedback()
    {
        return view('database');
    }

    public function handleFeedback(string $feedback)
    {
        return 'feedback - ' . $feedback;
    }
}
